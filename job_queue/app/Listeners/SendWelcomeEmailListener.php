<?php

namespace App\Listeners;

use App\Events\RegisterUser;
use App\Jobs\SendWelcomeEmailJob;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(RegisterUser $event): void
    {
        SendWelcomeEmailJob::dispatch($event->user);
    }
}
