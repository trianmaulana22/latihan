<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        return "Sample Create Controller In laravel";
    }

    public function showId($id)
    {
        return "Hallo {$id}";
    }
}
