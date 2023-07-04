<?php

namespace Tests\Unit;

use Tests\TestCase;

class FrontendControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testGrid()
    {
        $response = $this->get('/test-grid');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.test-grid');
    }

    public function testFlex()
    {
        $response = $this->get('/test-flex');

        $response->assertStatus(200);
        $response->assertViewIs('frontend.test-flex');
    }
}
