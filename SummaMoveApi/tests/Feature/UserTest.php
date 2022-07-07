<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_register()
    {
        $response = $this->post('/api/register', [
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => 'testje',
            'password_confirmation' => 'testje',
        ]);

        $response->assertStatus(200);
    }

    public function test_login()
    {
        $response = $this->post('/api/login', [
            'email' => 'test@test.com',
            'password' => 'testje',
        ]);

        $response->assertStatus(200);
    }
}
