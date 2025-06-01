<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormHandlerController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function handleForm(Request $request)
    {
        $request -> validate(['name' => 'required|min:3|max:255',
    ]);
      return 'you entered: '. $request->input('name');
    }
}
