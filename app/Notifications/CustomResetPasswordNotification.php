<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomResetPasswordNotification extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Wachtwoord herstellen')
            ->greeting('Hallo!')
            ->line('U ontvangt deze e-mail omdat we een verzoek hebben ontvangen om uw wachtwoord opnieuw in te stellen.')
            ->action('Reset Wachtwoord', url(route('password.reset', $this->token, false)))
            ->line('Deze link voor wachtwoordherstel verloopt over 60 minuten.')
            ->line('Als u geen verzoek heeft ingediend voor wachtwoordherstel, is verdere actie niet nodig.')
            ->salutation('Met vriendelijke groet, het team van Forever and Ever');
    }
}
