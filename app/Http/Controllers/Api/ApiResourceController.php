<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\ApiFormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;

class ApiResourceController extends ApiController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected mixed $baseRepository;

    private ?object $subject = null;

    public string $responseMessage = '';

    public function __construct(object $baseRepo)
    {
        $this->baseRepository = $baseRepo;

        parent::__construct();
    }

    /**
     * Display of the resource.
     *
     * @param  mixed  $source
     * @return JsonResponse
     */
    public function showResource(mixed $source): JsonResponse
    {
        $item = $source instanceof Model ? $source : $this->baseRepository->find($source);

        if (empty($item)) {
            $this->setResponseMessage('not_found');

            return $this->sendError($this->responseMessage);
        }

        $this->subject = $item;

        $this->setResponseMessage('viewed');

        return $this->sendResponse($item, $this->responseMessage);
    }

    /**
     * Create a new resource in storage.
     *
     * @param  ApiFormRequest  $request
     * @return JsonResponse
     */
    public function storeResource(ApiFormRequest $request): JsonResponse
    {
        $input = $request->validated();

        $item = $this->baseRepository->create($input);

        $this->subject = $item;

        $this->setResponseMessage('created');

        return $this->sendResponse($item, $this->responseMessage);
    }

    /**
     * Update given resource in storage.
     *
     * @param  ApiFormRequest  $request
     * @param  mixed  $source
     * @return JsonResponse
     */
    public function updateResource(ApiFormRequest $request, mixed $source): JsonResponse
    {
        $result = null;

        $input = $request->validated();

        if ($source instanceof Model) {
            $result = $source->update($input);

            $this->subject = $source;
        } elseif (is_numeric($source)) {
            $item = $this->baseRepository->find($source);

            if (empty($item)) {
                $this->setResponseMessage('not_found');

                return $this->sendError($this->responseMessage);
            }

            $this->subject = $item;

            $result = $this->baseRepository->update($input, $source);
        }

        $this->setResponseMessage($result ? 'updated' : 'could_not_updated');

        return $result
            ? $this->sendSuccess($this->responseMessage)
            : $this->sendError($this->responseMessage);
    }

    /**
     * Delete given resource from storage.
     *
     * @param  mixed  $source
     * @return JsonResponse
     */
    public function destroyResource(mixed $source): JsonResponse
    {
        $item = $source instanceof Model ? $source : $this->baseRepository->find($source);

        if (empty($item)) {
            $this->setResponseMessage('not_found');

            return $this->sendError($this->responseMessage);
        }

        $this->subject = $item;

        $result = $item->delete();

        $this->setResponseMessage($result ? 'deleted' : 'could_not_deleted');

        return $result
            ? $this->sendSuccess($this->responseMessage)
            : $this->sendError($this->responseMessage);
    }

    public function setResponseMessage(string $transKey, string $appendMessage = null): void
    {
        $this->responseMessage = "{$this->sectionName} ".__("crud.{$transKey}");

        if ($appendMessage) {
            $this->responseMessage .= " {$appendMessage}";
        }
    }

    // public function __destruct()
    // {
    //     // required spatie/laravel-activitylog
    //
    //     if (method_exists($this, $this->runningMethod)) {
    //         activity()
    //             ->useLog('API: user activity')
    //             ->performedOn($this->subject ?? $this->baseRepository->makeModel())
    //             ->causedBy(auth()->user())
    //             ->event($this->runningMethod)
    //             ->withProperties(request()->all() ?? null)
    //             ->log($this->responseMessage);
    //     }
    // }
}
