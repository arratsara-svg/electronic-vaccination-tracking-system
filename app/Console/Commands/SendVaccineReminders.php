<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Appointement;
use App\Notifications\VaccineReminderNotification;
use Carbon\Carbon;

class SendVaccineReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-vaccine-reminders';

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
        $tomorrow = Carbon::tomorrow();

        $appointments = Appointement::whereDate('date', $tomorrow)->get();

        foreach ($appointments as $appointment) {
            if ($appointment->user) {
                $appointment->user->notify(new VaccineReminderNotification($appointment));
            }
        }

        $this->info('تم إرسال إشعارات التذكير بنجاح.');
    }
}
