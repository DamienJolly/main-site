<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_services_pages_return_successful_responses(): void
    {
        $this->get('/services')->assertStatus(200);
        $this->get('/services/house-cleaning')->assertStatus(200);
        $this->get('/services/commercial-cleaning')->assertStatus(200);
        $this->get('/services/one-off-cleans')->assertStatus(200);
    }
}
