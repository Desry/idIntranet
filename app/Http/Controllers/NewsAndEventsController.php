<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsAndEventsController extends Controller
{
    public function index()
    {
        $params['activenavbar'] = 'newsandevents';
        return view('newsandevents', $params);

    }
}
