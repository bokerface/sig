<?php

namespace App\Lib;

use App\Models\Notification;

class CustomNotification
{
    public $receiver;
    public $sender;
    public $message;
    public $status;

    public function send_notification()
    {
        $notification = new Notification();
        $notification->sender = $this->sender;
        $notification->receiver = $this->receiver;
        $notification->message = $this->message;
        $notification->status = $this->status;
        $notification->save();
    }
}
