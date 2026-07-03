<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Appointement;

class VaccineReminderNotification extends Notification
{
    use Queueable;

    public $appointment;

    public function __construct(Appointement $appointment)
    {
        $this->appointment = $appointment;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('تذكير بموعد التطعيم غداً')
            ->greeting('مرحباً ' . $notifiable->name)
            ->line('نود تذكيرك بأن لديك موعد تطعيم غداً.')
            ->line('📅 التاريخ: ' . $this->appointment->date)
            ->line('💉 اللقاح: ' . ($this->appointment->vacc->name_vacc ?? 'غير محدد'))
            ->line('🩺 الطبيب: ' . ($this->appointment->doctor->name ?? 'غير محدد'))
            ->action('عرض الموعد', url('/myappointment'))
            ->line('نتمنى لك ولطفلك الصحة والسلامة!');
    }

    public function toArray(object $notifiable): array
    {
        return [
            'appointment_id' => $this->appointment->id,
            'date' => $this->appointment->date,
        ];
    }
}
