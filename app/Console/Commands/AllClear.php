<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class AllClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'all:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        system('composer dump-autoload');
        $this->info('Composer dump auto load');

        //cache clear
        Artisan::call('cache:clear');
        $this->info('Cache is cleared');

        Artisan::call('route:clear');
        $this->info('Clear route cache');
        //
        Artisan::call('config:clear');
        $this->info('Clear config cache');
        //
        Artisan::call('view:clear');
        $this->info('Clear compiled view files');

        system('clear');

    }
}
