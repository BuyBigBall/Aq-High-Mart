<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class UserPointhist extends Component
{

    use WithPagination;
    public $search_result;
    public function render()
    {
        $this->search_result = [];

        return view('admin.livewire.usermanage.user-pointhist')
                    ->extends('admin.admin_master'
                            , compact( []
                                    ) 
                    )
            ->section('dashboard_content')
            ->with('pagination'               , $this->search_result    )
            ;
    }
  
}
