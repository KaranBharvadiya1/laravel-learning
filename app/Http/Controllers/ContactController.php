<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function showForm(){
        return view('contact');
    }

    function submitForm(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'max:500',
        ]);

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
