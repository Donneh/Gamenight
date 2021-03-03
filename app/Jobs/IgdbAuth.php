<?php

namespace App\Jobs;

use App\Services\IgdbAdapter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class IgdbAuth implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @param IgdbAdapter $gameApi
     * @return void
     */
    public function handle(IgdbAdapter $gameApi)
    {
        $gameApi->getToken();
    }
}
