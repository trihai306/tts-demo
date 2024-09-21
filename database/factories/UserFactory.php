<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'phone_verified_at' => now(),
            'email_verified_at' => now(),
            'avatar' => $this->faker->imageUrl(),
            'address' => $this->faker->address,
            'birthday' => $this->faker->dateTime(),
            'store_name' => $this->faker->company,
            'phone_token' => Str::random(10),
            'gender' => $this->faker->randomElement(['male', 'female', 'non-binary', 'genderqueer', 'transgender', 'genderfluid', 'agender']),
            'password' => Hash::make('password'), // password
            'status' => $this->faker->randomElement(['active', 'inactive', 'blocked']),
            'type' => $this->faker->randomElement(['buyer','seller']),
            'field' => $this->faker->randomElement(['leather_goods', 'clothing','all']),
            'remember_token' => Str::random(10),
        ];
    }
}
