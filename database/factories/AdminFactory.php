<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features; 
  
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Zain',
            'email' => 'zain@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$grtY9nR7LPnXvzhdSvX.LOP8qaOrgxtnqT5effUyy6bvS4se4owMa', // 11111111
            'remember_token' => Str::random(10), 
        ];
    }
}
