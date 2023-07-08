<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function product(int $id, Request $request) {
        $search = $request->query('search');

        return view('product', [
            'id' => $id,
            'search' => $search,
        ]);
    }

    public function contacts() {
        return view('contact');
    }
}
