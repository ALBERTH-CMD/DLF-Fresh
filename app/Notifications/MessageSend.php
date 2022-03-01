<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class MessageSend extends Notification implements ShouldQueue
{
    use Queueable;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Public $message)
    {

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database', 'broadcast','nexmo'];
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
                    ->success()
                    ->subject('Nuevo Mensaje')
                    ->greeting('Hola Coders')
                    ->line('Para Leer tu Mensaje haz click en el boton')
                    ->action('Ver Mensaje', route('admin.messages.show', $this->message->id))
                    ->line('Hasta Luego');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'url' => route('admin.messages.show', $this->message->id),
            'message' => 'Has recibido un mensaje de ' . User::find( $this->message->from_user_id )->name
        ];
    }

    public function toBroadcast($notifiable){
        return new BroadcastMessage([]);
    }

    public function toNexmo($notifiable){
        return (new NexmoMessage)
                    ->content("Has Recibido Un Nuevo Mensaje de " . User::find($this->message->from_user_id)->name);
    }
}
