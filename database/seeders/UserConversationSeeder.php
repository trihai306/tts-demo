<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Conversation;
use App\Models\Message;

class UserConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tìm người dùng có email là admin@example.com
        $admin = User::where('email', 'admin@example.com')->first();

        if (!$admin) {
            echo "User with email admin@example.com not found.\n";
            return;
        }

        // Lấy danh sách tất cả người dùng khác
        $users = User::where('email', '!=', 'admin@example.com')->get();

        foreach ($users as $user) {
            // Tạo cuộc hội thoại giữa admin và người dùng hiện tại
            $conversation = Conversation::create([
                'type' => 'private',
            ]);

            // Thêm người dùng vào cuộc hội thoại
            $conversation->users()->attach([$admin->id, $user->id]);

            // Tạo tin nhắn giữa admin và người dùng
            Message::create([
                'conversation_id' => $conversation->id,
                'sender_id' => $user->id,
                'content' => 'Hello, this is a seeded message.',
                'type' => 'text',
            ]);
        }
    }
}
