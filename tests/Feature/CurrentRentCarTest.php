<?php

namespace Tests\Feature;

use App\Models\AvailableCar;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class CurrentRentCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_non_auth_getlist_of_cars()
    {
        $this->withHeader('Accept', 'application/json');
        $response = $this->get('/api/cars');

        $response->assertStatus(401);
    }

    public function test_wront_http_method_for_getlist_of_cars()
    {
        $this->withHeader('Accept', 'application/json');
        $respose = $this->post('api/cars');

        $respose->assertStatus(405);
    }

    public function test_get_list_of_cars_success()
    {
        $this->withHeader('Accept', 'application/json');
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/cars');
        $response->assertStatus(200);

    }

    public function test_rent_non_auth()
    {
        $this->withHeader('Accept', 'application/json');
        $response = $this->post('/api/rent');

        $response->assertStatus(401);
    }

    public function test_rent_success()
    {
        $this->withHeader('Accept', 'application/json');
        $user = User::factory()->create();
        $car = AvailableCar::factory()->create();

        $response = $this->actingAs($user)->post('/api/rent', ['car_id' => $car->id]);
        $response->assertStatus(200);

    }

    public function test_wront_http_method_for_rent()
    {
        $this->withHeader('Accept', 'application/json');
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/api/rent');
        $response->assertStatus(405);
    }


}
