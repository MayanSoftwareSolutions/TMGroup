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
    public $contactForm;
    public $contactLine3;
    public $contactLine4;

    public function __construct($logInteraction)
    {
    
        $this->logInteraction = $logInteraction;
        $this->contactForm = ContactForm::where('id', $this->logInteraction->contact_form_id)->first();

    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject($this->logInteraction->subject)
                    ->line($this->contactForm->organisation)
                    ->line('ThompsonMooreGroup Ref '.$this->logInteraction->id)
                    ->line('Thank you for contacting ThompsonMooreGroup')
                    ->line($this->logInteraction->context);
    }


    public function toArray($notifiable)
    {
        return [
            'notify' => ['Interaction Notification. A new "'.$this->logInteraction->interaction_type.'" has been sent to '.$this->contactForm->organisation],
            'url' => ['/contacts/'.$this->contactForm->id]
        ];
    }
}
