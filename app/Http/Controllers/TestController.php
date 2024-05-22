<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function testMethod1()
    {
        $data=DB::table('event')->get();
        return $data;
    }
}
