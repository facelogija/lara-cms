<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TwoFactorCode extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Jūsų autentifikavimo kodas - '.$notifiable->two_factor_code)
                    ->action('Patvirtinti čia', route('verify.index'))
                    ->line('Kodas galios tik 10 minučių!')
                    ->line('Jeigu jūs nebandėte prisijungti prie sistemos galite ignoruoti šį laišką.');
    }
}