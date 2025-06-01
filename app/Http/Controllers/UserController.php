<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($nama, $city){
        return view('user', [
            'name' => $nama,
            'city' => $city
        ]);
    }
}
