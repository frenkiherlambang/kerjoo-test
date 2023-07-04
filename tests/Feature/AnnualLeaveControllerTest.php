<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\AnnualLeave;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnnualLeaveControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function testShow()
    {
        // Create a fake annual leave and attach to a random user
        factory(AnnualLeave::class)->make()->user()->associate(factory(User::class)->create())->save();
        $annualLeave = AnnualLeave::first();
        // dd($annualLeave);
        // Send a GET request to the show method with the annual leave ID and accept JSON response
        $response = $this->json('GET', '/api/annual-leaves/' . $annualLeave->id);

        // Assert that the response has a successful status code (e.g., 200)
        $response->assertStatus(200);

        // Assert that the response contains the annual leave data in JSON format
        $response->assertJson($annualLeave->toArray());
    }

    public function testIndex()
    {
        // Create multiple fake annual leaves
        factory(AnnualLeave::class, 5)->make()->each(function ($annualLeave) {
            $annualLeave->user()->associate(factory(User::class)->create())->save();
        });

        $annualLeaves = AnnualLeave::all();

        // Send a GET request to the index method
        $response = $this->json('GET', '/api/annual-leaves');

        // Assert that the response has a successful status code (e.g., 200)
        $response->assertStatus(200);

        // Assert that the response contains the annual leaves data in JSON format
        $response->assertJson($annualLeaves->toArray());
    }

    public function testStore()
    {
        // Generate fake data for the annual leave

        $annualLeaveData = [
            'startDate' => '2023-09-02',
            'endDate' => '2023-10-02',
            'reason' => $this->faker->text(),
            'userId' => factory(User::class)->create()->id,
            // Include other required fields here
        ];

        // Send a POST request to the store method with the annual leave data
        $response = $this->json('POST','/api/annual-leaves', $annualLeaveData);
        // dd($response->getContent());

        // Assert that the response has a successful status code (e.g., 200)
        $response->assertStatus(200);

    }


}
