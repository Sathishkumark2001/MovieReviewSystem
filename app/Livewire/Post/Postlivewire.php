<?php

namespace App\Livewire\Post;
use Livewire\WithPagination;

use App\Models\form;
use Livewire\Component;
use Livewire\Attributes\Computed;

class Postlivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    #[Computed]
    public function user()
    {
        // $latestReview = ;
        return form::latest()->paginate(5);
    }
 
           

    public function render()
    {
        return view('livewire.post.postlivewire');
    }
}
