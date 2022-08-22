<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\PersonalAccessToken;

class SanctumServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PersonalAccessToken::updating($this->preventDatabaseWrite(...));
    }

    /**
     * Sanctum updates a "last_used_at" column on every incoming request.
     * This could possibly lead to deadlocks due to high concurrency.
     * We don't need this information, so we're gonna ignore it.
     */
    private function preventDatabaseWrite(PersonalAccessToken $model)
    {
        return ! $model->isDirty('last_used_at'); // returning "false" will cancel the "UPDATE" operation
    }
}
