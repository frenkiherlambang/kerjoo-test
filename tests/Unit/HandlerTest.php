<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Exceptions\Handler;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HandlerTest extends TestCase
{
    use RefreshDatabase;

    public function testRenderReturnsErrorResponse()
    {
        $handler = new Handler($this->app);

        $request = Request::create('/test', 'GET');
        $exception = new Exception('Test exception');

        $response = $handler->render($request, $exception);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(500, $response->getStatusCode());
    }




}
