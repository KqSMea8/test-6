<?php
 namespace Illuminate\Notifications\Events; class NotificationSent { public $notifiable; public $notification; public $channel; public $response; public function __construct($notifiable, $notification, $channel, $response = null) { $this->channel = $channel; $this->response = $response; $this->notifiable = $notifiable; $this->notification = $notification; } } 