<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;
use NotificationChannels\Telegram\TelegramChannel;
use App\Models\Basket;

class Telegram extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function order()
    {
        $baskets = Basket::all();
        $arr = [];
        foreach ($baskets as $basket){
            $arr[$basket->id] = Basket::find($basket->id)->good;
        }
        return $arr;
    }

    public function toTelegram($notifiable)
    {
        // $url = url('http://laravel2/blog');

        return TelegramMessage::create()
            ->content(json_encode($this->order()));

            // (Optional) Blade template for the content.
            // ->view('notification', ['url' => $url])

            // (Optional) Inline Buttons
    }
}
