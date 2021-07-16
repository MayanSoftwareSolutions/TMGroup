<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RolePermissionChangeNotification extends Notification
{
    use Queueable;

    private $currentRole;


    public function __construct($currentRole)
    {
        $this->role = $currentRole;
    }


    public function via($notifiable)
    {
        return ['mail', 'database'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The Role Profile, '.$this->role->title.(' has been updated recently. The permissions to this role have been changed'))
                    ->action('View Role', url('/roles/'.$this->role->id))
                    ->line('You recieved this notification becasuse you are registered as a system administrator')
                    ->line('Thank you for using our application!');
    }


    public function toArray($notifiable)
    {
        return [
            'notify' => ['The Role Profile, '.$this->role->title.(', has been updated recently. The permissions to this role have been changed')],
            'url' => ['/roles/'.$this->role->id]
        ];
    }
}
