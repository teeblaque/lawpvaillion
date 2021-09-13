<?php

namespace App\Console\Commands;

use App\Mail\ReminderMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ClientReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'client:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Respectively send a reminder to all clients without their passport every three days';

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
     * @return int
     */
    public function handle()
    {
        $limit = Carbon::now()->subDay(3);
        $users = User::where('avatar', null)->where('created_at', '<=', $limit)->get();
        foreach ($users as $user) {
            $details = [
                'name' => $user->first_name,
                'title' => 'Reminder',
            ];

            Mail::to($user->email)->send(new ReminderMail($details));
        }
        $this->info('Successfully sent reminder to everyone.');
    }
}
