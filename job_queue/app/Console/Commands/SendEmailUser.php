<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendWelcomeEmailJob;
use App\Models\User;
use Illuminate\Support\Facades\Log;
class SendEmailUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user) {
            SendWelcomeEmailJob::dispatch($user);
        }
        $this->info('Emails dispatched successfully!');
        Log::info('Emails dispatched successfully!');
    }
}
