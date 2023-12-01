<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    public function testRegisterSuccess()
    {
        $this->post('/api/users/register', [
            'username' => 'powerpuff',
            'password' => 'rahasia',
            'email' => 'powerpuff@gmail.com',
            'fullname' => 'powerpuff all',
            'phone' => '08123123123',
        ])->assertStatus(201)
            ->assertJson([
                "data" => [
                    'username' => 'powerpuff',
                    'email' => 'powerpuff@gmail.com',
                    'fullname' => 'powerpuff all',
                    'phone' => '08123123123',
                ]
            ]);
    }

    public function testLogin()
    {
        $this->seed([UserSeeder::class]);

        $this->post('/api/users/login', [
            'username' => 'admin',
            'password' => 'admin',
        ])->assertStatus(200)
            ->assertJson([
                "data" => [
                    'username' => 'admin',
                    'email' => 'admin@localhost',
                    'fullname' => 'Administrator',
                    'phone' => '081234567890',
                ]
            ]);

        $user = User::where('username', 'admin')->first();
        $this->assertNotNull($user->token);
    }
}
