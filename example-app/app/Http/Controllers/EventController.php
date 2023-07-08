<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $arr = [10, 20, 30, 40, 50, 60];
        $names = ['Pedro', 'Carlos', 'Guilherme'];

        return view(
            'welcome',
            [
                'arr' => $arr,
                'names' => $names,
            ],
        );
    }

    public function create() {
        return view('events.create');
    }
}
