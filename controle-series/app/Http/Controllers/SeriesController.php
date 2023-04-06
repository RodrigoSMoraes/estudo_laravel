<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Flash'
        ];

        return View('series.index')->with('series', $series);

    }

    public function create()
    {
        return view('series.create');
    }
}
