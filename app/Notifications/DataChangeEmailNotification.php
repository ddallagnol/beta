<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class DataChangeEmailNotification extends Notification
{
    use Queueable;

    public function __construct($data)
    {
        $this->data = $data;
        $this->ticket = $data['ticket'];
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return $this->getMessage();
    }

    public function getMessage()
    {
        return (new MailMessage)
            ->subject($this->data['action'])
            ->greeting('Olá,')
            ->line($this->data['action'])
            ->line("Solicitante: ".$this->ticket->author_name) 
            ->line("Assunto: ".$this->ticket->title)
            ->line("Descrição Breve: ".Str::limit($this->ticket->content, 200))
            ->action('Visualizar Solicitação', route('admin.tickets.show', $this->ticket->id))
            ->line('Obrigado!')
            ->line(config('app.name') . ' da Prefeitura de Ibema/PR')
            ->salutation(' ');
    }
}
