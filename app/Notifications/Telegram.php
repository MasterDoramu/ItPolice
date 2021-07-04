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

    public function messageOrder()
    {
        $str = "Заказ товаров\n\n";
        foreach ($this->order() as $key=>$item){
            $str .= "Номер заказа: " . $key . "\n";
            $str .= "Наименование: " . $item->title . "\n";
            $str .= "Описание: " . $item->description . "\n";
            $str .= "Стоимость: " . $item->price . "\n\n";
        }
        return $str;
    }

    public function toTelegram($notifiable)
    {

        return TelegramMessage::create()
            ->content($this->messageOrder());

    }
}
