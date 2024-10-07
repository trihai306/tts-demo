<li class="custom-dropdown" x-data="{
    notifications: [],
    unreadCount:  $wire.entangle('unreadCount'),
    offset: $wire.entangle('offset'),
    limit: $wire.entangle('limit'),
    loading: false,
    async loadNotifications() {
        try {
         const data = await $wire.call('loadMore');
         this.notifications = [...this.notifications, ...data];
        } catch (e) {
        }
    },
    async loadMore() {
        if (!this.loading) {
            this.loading = true;
            await this.loadNotifications();
            this.loading = false;
        }
    },
     async markAsRead(notificationId, index) {
        await $wire.call('markAsRead', notificationId);
        this.notifications[index].read_at = new Date().toISOString(); // Update in local state
    }
}" x-init="loadNotifications()">
    <a href="javascript:void(0)">
        <svg>
            <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#notification') }}"></use>
        </svg>
    </a>
    <span class="badge rounded-pill badge-primary" x-text="unreadCount"></span>
    <div class="custom-menu notification-dropdown py-0 overflow-hidden">
        <h3 class="title bg-primary-light dropdown-title">Notification <span class="font-primary">View all</span></h3>
        <ul class="activity-timeline notification-list" style="max-height: 400px; overflow-y: auto;" @scroll="if ($el.scrollTop + $el.clientHeight >= $el.scrollHeight) loadMore()">
            <template x-for="(notification, index) in notifications" :key="index">
                <li class="d-flex align-items-start" @click="markAsRead(notification.id, index)" style="cursor: pointer;">
                    <div class="activity-line"></div>
                    <div class="activity-dot-primary"></div>
                    <div class="flex-grow-1">
                        <h6 class="f-w-600 font-primary">
                            <span x-text="new Date(notification.created_at).toLocaleDateString('vi-VN')"></span>
                            <span x-text="new Date(notification.created_at).toLocaleTimeString('vi-VN', { hour: '2-digit', minute: '2-digit' })"></span>
                            <span class="circle-dot-primary float-end" x-show="!notification.read_at">
                    <svg class="circle-color">
                        <use href="{{ asset('admiro/assets/svg/iconly-sprite.svg#circle') }}"></use>
                    </svg>
                </span>
                        </h6>
                        <h5 x-text="notification.title ?? 'Unknown'"></h5>
                        <p class="mb-0" x-text="notification.description.split(' ').slice(0, 100).join(' ')"></p>
                    </div>
                </li>
            </template>

            <li x-show="loading" class="text-center">
                <span>Loading more notifications...</span>
            </li>
        </ul>
    </div>
</li>
