<?php

namespace Database\Factories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data = json_encode([
            'title' => 'Tiêu đề',
            'content' => 'Nội dung',
        ]);

        $start = strtotime('first day of January ' . date('Y'));
        $end = time();

        $randomTimestamp = mt_rand($start, $end);

        return [
            'id' => Str::uuid()->toString(),
            'type' => 'App\Notifications\UserNotification',
            'notifiable_type' => 'App\Models\User',
            'notifiable_id' => 1,
            'data' => $data,
            'created_at' => date('Y-m-d H:i:s', $randomTimestamp),
            'updated_at' => date('Y-m-d H:i:s', $randomTimestamp),
        ];
    }
}
