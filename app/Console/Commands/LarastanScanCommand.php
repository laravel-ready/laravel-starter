<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LarastanScanCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larastan:scan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run `./vendor/bin/phpstan analyse` over php artisan commands';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (config('app.env') === 'local') {
            $this->info('Running `./vendor/bin/phpstan analyse`...');

            $output = shell_exec(base_path('vendor/bin/phpstan analyse --memory-limit=2G'));

            $this->info($output);
        }
    }
}
