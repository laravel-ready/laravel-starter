<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PintFixCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pint:fix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run `./vendor/bin/pint` over php artisan commands';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if (config('app.env') === 'local') {
            $this->info('Running `./vendor/bin/pint`...');

            $output = shell_exec(base_path('vendor/bin/pint'));

            return $this->info($output);
        }
    }
}
