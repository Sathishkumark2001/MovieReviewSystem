<?php

namespace App\Livewire\Form;

use App\Models\form;
use App\Mail\postmail;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;

class Formlivewire extends Component
{
        use WithFileUploads;
    
        public $formId;
    public $heading;
    public $imageFile;
    public $review;
    public $fullreview;
    public $formData;

    public function mount($id)
    {
        $this->formId = $id;
        if($id)
        {

        }else{

        }
        $this->formData = Form::find($id);
        
        if ($this->formData) {
            $this->heading = $this->formData->heading;
            $this->imageFile = $this->formData->imageFile; // Assuming this is the file path
            $this->review = $this->formData->review;
            $this->fullreview = $this->formData->fullreview;
            // Assign other properties accordingly based on your Form model fields
        }
    }

    public function store()
    {
        $validatedData = $this->validate([
            'heading' => 'required|string',
            'imageFile' =>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'review' => 'required|string',
            'fullreview' => 'required|string'
        ]);

        if ($this->imageFile) {
            $fileName = time() . '.' . $this->imageFile->getClientOriginalExtension();
            $this->imageFile->storeAs('public/images', $fileName);
            $validatedData['imageFile'] = 'images/' . $fileName;
        }

        if ($this->formData) {
            $this->formData->update($validatedData);
        } else {
            Form::create($validatedData);
            $body = [
                'heading'=>$validatedData['heading'],
                'imageFile'=>$validatedData['imageFile'],

                'review'=>$validatedData['review']
            ];
            Mail::to("sathishkumar93413@gmail.com")->send(new postmail($body));
        }

        return redirect()->route('list');
    }

    public function render()
    {
        return view('livewire.form.formlivewire');
    }
}