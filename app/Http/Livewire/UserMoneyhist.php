<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class UserMoneyhist extends Component
{
    use WithPagination;
    public $search_result;
    public function render()
    {
        $this->search_result = [];

        return view('admin.livewire.usermanage.user-moneyhist')
                    ->extends('admin.admin_master'
                            , compact( []
                                    ) 
                    )
            ->section('dashboard_content')
            ->with('pagination'               , $this->search_result    )
            ;
    }
}
