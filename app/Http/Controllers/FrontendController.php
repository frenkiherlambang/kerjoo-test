<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function testGrid()
    {

        return view('frontend.test-grid');

    }
    public function testFlex()
    {
        return view('frontend.test-flex');
    }
}
