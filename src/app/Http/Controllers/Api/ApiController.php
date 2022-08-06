<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public string $sectionName = 'none';

    public array $roleAndPermissions = [];

    protected string $runningMethod = '';

    public function __construct()
    {
        $this->runningMethod = request()->route()->getActionMethod();

        // inline permission middleware
        // required spatie/laravel-permission package

        // if ($this->roleAndPermissions && count($this->roleAndPermissions)) {
        //     $this->middleware(function ($request, $next) {
        //         if (! $this->checkPermissions()) {
        //             return response()->json(['message' => __('permission.unauthorized_access')], 403);
        //         }

        //         return $next($request);
        //     });
        // }
    }

    /**
     * Check permissions of authenticated user
     *
     * @return bool
     */
    private function checkPermissions(): bool
    {
        if (isset($this->roleAndPermissions[$this->runningMethod])) {
            $permission = $this->roleAndPermissions[$this->runningMethod];
            $hasPermission = Auth::user()->hasPermissionTo($permission, 'api');

            if (!$hasPermission) {
                return false;
            }
        }

        return true;
    }

    public function getUserRoles(): array
    {
        return Auth::user()->roles()->get()->pluck('name')->toArray();
    }

    /**
     * Send a success response with a message and data
     *
     * @param $data
     * @param $message
     * @return JsonResponse
     */
    public function sendResponse($data, $message): JsonResponse
    {
        return Response::json([
            'success' => true,
            'data' => $data,
            'message' => Str::ucfirst(Str::lower($message)) . '.',
        ]);
    }

    /**
     * Send a success response with a message
     *
     * @param $message
     * @return JsonResponse
     */
    public function sendSuccess(string $message): JsonResponse
    {
        return Response::json([
            'success' => true,
            'message' => Str::ucfirst(Str::lower($message)) . '.',
        ], 200);
    }

    /**
     * Send error response with a message
     *
     * @param $error
     * @param  int  $code
     * @return JsonResponse
     */
    public function sendError(string $error, int $code = 404): JsonResponse
    {
        $res = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return Response::json($res, $code);
    }
}
