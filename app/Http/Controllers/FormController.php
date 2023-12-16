<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Storage; // Import the Storage facade

class FormController extends Controller
{
    public function store(){
        $id = 0;
        return view('form', compact('id'));
    }
    // public function store(Request $request)
    // {
        
    //     $validatedData = $request->validate([
    //         'heading' => 'required|string',
    //         'imageFile' => 'nullable|image', // Ensure it's an image
    //         'review' => 'required|string',
    //         'fullreview' => 'required|string'
    //     ]);

        
    //     if ($request->hasFile('imageFile')) {
    //         $imagePath = $request->file('imageFile')->store('images', 'public');
    //         $validatedData['imageFile'] = $imagePath;
    //     }

        
    //     Form::create($validatedData);

    //     return redirect()->route('home');
    // }

    public function list(){
            // $reviews = Form::all();
        return view('list');
    }
    public function editform($id)
    { 

        return view('form', compact('id'));
    }
    
}
