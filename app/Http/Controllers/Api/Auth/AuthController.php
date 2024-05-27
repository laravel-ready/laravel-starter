<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\Auth\UserLoginRequest;
use App\Http\Requests\Api\Auth\UserRegisterRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends ApiController
{
    /**
     * Login user with credentials
     *
     *
     * @throws ValidationException
     */
    public function login(UserLoginRequest $request): array|Response
    {
        $clientUserAgent = $request->header('User-Agent');

        if (! $clientUserAgent) {
            throw ValidationException::withMessages([
                'client' => [__('auth.unknown_client')],
            ]);
        }

        $user = User::select('id', 'name', 'email', 'password')
            ->with([
                // TODO: add role-permission system
                // 'roles' => function ($query) {
                //     $query->select('id', 'name')->with([
                //         'permissions' => function ($query) {
                //             $query->select('id', 'name');
                //         }
                //     ]);
                // },
            ])
            ->where('email', $request->email)
            ->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => [__('auth.password')],
            ]);
        }

        // clean previous tokens on this client
        $this->logoutOnThisDevice($user, $clientUserAgent);

        return [
            'user' => $user,
            'authToken' => $user->createToken($clientUserAgent)->plainTextToken,
            'refreshToken' => null,
            'expiresIn' => null,
        ];
    }

    /**
     * Register new user
     *
     *
     * @throws ValidationException
     */
    public function register(UserRegisterRequest $request): array|Response
    {
        if (User::where('email', $request->email)->exists()) {
            throw ValidationException::withMessages([
                'email' => [__('auth.this_email_already_taken')],
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return [
            'success' => (bool) $user,
        ];
    }

    /**
     * Logout on this device
     */
    public function logout(Request $request): array|Response
    {
        $clientUserAgent = $request->header('User-Agent');

        $this->logoutOnThisDevice(Auth::user(), $clientUserAgent);

        return [
            'success' => true,
        ];
    }

    /**
     * Show authenticated user
     */
    public function me(): Response|Authenticatable
    {
        return Auth::user();
    }

    /**
     * Logout on this device
     * This method using for prevent multiple logins on one device
     */
    private function logoutOnThisDevice(User $user, string $clientUserAgent): void
    {
        $user->tokens()->where('name', $clientUserAgent)->delete();
    }
}
