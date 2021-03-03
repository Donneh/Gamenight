<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class IgdbAuth extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'igdb:auth';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh the bearer token to connect with the IGDB api.';

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
     */
    public function handle()
    {
        \App\Jobs\IgdbAuth::dispatch();

        $this->info(Carbon::now() . ': Succesfully refreshed the bearer token.');
    }
}
