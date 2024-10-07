<?php

namespace Adminftr\Core\Future\Admin;

use Livewire\Component;
use Adminftr\Core\Http\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationsHeader extends Component
{
    public $notifications = [];
    public $offset = 0;
    public $limit = 10;
    public $count = 0;
    public $unreadCount = 0;

    public function mount()
    {
        $this->updateUnreadCount();
    }

    public function loadMore()
    {
        $this->skipRender();
        $this->offset += $this->limit;
        return Notification::where('notifiable_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->offset($this->offset)
            ->limit($this->limit)
            ->get();
    }


    private function updateUnreadCount()
    {
        $this->unreadCount = Notification::where('notifiable_id', Auth::id())->unread()->count();
    }


    public function markAsRead($notificationId)
    {
        $this->skipRender();
        $notification = Notification::where('id', $notificationId)
            ->where('notifiable_id', Auth::id())
            ->first();

        if ($notification && $notification->read_at === null) {
            $notification->update(['read_at' => now()]);
            $this->updateUnreadCount();
        }
    }

    public function render()
    {
        return view('future::notifications.list');
    }
}
