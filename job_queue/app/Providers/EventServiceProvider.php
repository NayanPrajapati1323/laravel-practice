<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\RegisterUser;
use App\Listeners\SendWelcomeEmailListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    // protected $listen = [
    //         RegisterUser::class => [
    //             SendWelcomeEmailListener::class,
    //         ],
    //     ];
    public function register(): void
    {
        $this->listen = [
            RegisterUser::class => [
                SendWelcomeEmailListener::class,
            ],
        ];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
