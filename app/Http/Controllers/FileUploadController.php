<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showForm(){
        return view('fileupload');
    }

    public function uploadFile(Request $request){
        
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        
        ]);

        $path = $request->file('file')->store('upload', 'public');

        return redirect()->back()->with('success', 'File uploaded successfully! Path: ' . $path);

    }    
}
