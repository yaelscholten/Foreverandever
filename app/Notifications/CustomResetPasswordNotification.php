<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomResetPasswordNotification extends Notification
{
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

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
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        {
            $resetUrl = url('/reset-password/' . $this->token . '?email=' . urlencode($notifiable->email));
        
            return (new MailMessage)
                ->subject('Wachtwoord Reset Verzoek')
                ->greeting('Hallo!')
                ->line('Je ontvangt deze e-mail omdat we een wachtwoord reset verzoek hebben ontvangen voor je account.')
                ->action('Reset Wachtwoord', $resetUrl)
                ->line('Deze link verloopt over 60 minuten.')
                ->line('Als je geen wachtwoord reset hebt aangevraagd, hoef je verder niets te doen.')
                ->line('Als je problemen hebt met het klikken op de "Reset Wachtwoord" knop, kopieer en plak de onderstaande URL in je webbrowser:')
                ->line($resetUrl)
                ->salutation('Met vriendelijke groet, ForEverAndEver');
        }
    }
    

}
