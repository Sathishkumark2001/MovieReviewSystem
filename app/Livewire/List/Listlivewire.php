<?php

namespace App\Livewire\List;

use App\Models\form;
use Livewire\Component;
use Livewire\Attributes\Computed;

class Listlivewire extends Component
{

    //     public function list(){
    //     $reviews = Form::all(); // Retrieve all reviews from the database
    //     return view('list', ['reviews' => $reviews]);
    // }
    protected $paginationTheme = 'bootstrap';

    
    #[Computed]
    public function list()
    {
        // $latestReview = ;
        return form::latest()->get();
    }
 
           
    public function render()
    {
        return view('livewire.list.listlivewire');
    }
}
