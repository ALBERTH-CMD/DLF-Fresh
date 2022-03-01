<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class NotificationComponent extends Component
{

    
    public $notifications, $count;

    protected $listeners = ['notification'];

    public function mount(){
        $this->notification();
    }

    public function notification(){
        $this->notifications = auth()->user()->notifications;
        $this->count = auth()->user()->unreadNotifications->count();
    }

    public function markAsRead(){
        auth()->user()->unreadNotifications->markAsRead();
        $this->count = 0;
    }

    public function read($notification_id){
        $notification = auth()->user()->notifications()->findOrFail($notification_id);
        $notification->markAsRead();
    }

    public function render()
    {
        return view('livewire.admin.notification-component');
    }
}
