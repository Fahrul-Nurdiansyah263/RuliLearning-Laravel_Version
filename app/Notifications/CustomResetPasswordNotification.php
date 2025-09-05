<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class CustomResetPasswordNotification extends ResetPasswordNotification
{
    use Queueable;

    public function toMail($notifiable)
    {
        $resetUrl = $this->resetUrl($notifiable);
        $userName = $notifiable->name;

        return (new MailMessage)
            ->subject(Lang::get('Reset Password'))
            ->greeting(Lang::get('Halo, ' . $userName . '!'))
            ->line(Lang::get('Anda menerima email ini karena kami menerima permintaan reset password untuk akun Anda.'))
            ->action(Lang::get('Reset Password'), $resetUrl)
            ->line(Lang::get('Tautan reset password ini akan kedaluwarsa dalam :count menit.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
            ->line(Lang::get('Jika Anda tidak merasa meminta reset password, abaikan email ini.'));
    }
}