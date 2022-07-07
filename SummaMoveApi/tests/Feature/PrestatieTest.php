<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Date;
use Tests\TestCase;

class PrestatieTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_prestatie_index()
    {
        $response = $this->get('/api/prestaties');

        $response->assertStatus(200);
    }

    public function test_prestatie_create()
    {
        $response = $this->get('/api/prestaties/create');

        $response->assertStatus(200);
    }

    public function test_prestatie_store()
    {
        $response = $this->post('/api/prestaties', [
            'naam' => 'test',
            'datum' => Date::now(),
            'user_id' => 1,
        ]);

        $response->assertStatus(200);
    }

    public function test_prestatie_destroy()
    {
        $response = $this->delete('/api/prestaties/1');

        $response->assertStatus(200);
    }
}
