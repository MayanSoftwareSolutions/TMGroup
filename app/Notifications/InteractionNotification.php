<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\ContactForm;
use App\Models\User;
use App\Models\ContactInteractions;

class InteractionNotification extends Notification
{
    use Queueable;

    public $logInteraction;
    public $contactLine3;
    public $contactLine4;

    public function __construct($logInteraction)
    {
        $this->logInteraction = $logInteraction;
        $this->contactLine1 = "Kind Regards";
        $this->contactLine4 = "ThompsonMooreGroup Ltd";
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Contact Form Ref 000'.$this->logInteraction->id)
                    ->line($this->logInteractions)
                    ->line($this->logInteractions)
                    ->line($this->contactLine3)
                    ->line($this->contactLine4);        
    }


    public function toArray($notifiable)
    {
        return [
            'notify' => ['An interaction has been logged on '. $this->logInteraction->created_at->format('j F, Y')],
            'url' => []
        ];
    }
}
