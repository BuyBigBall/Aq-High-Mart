<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MoneyHist;

class UserMoneyhist extends Component
{
    use WithPagination;
    public $search_result;
    public function render()
    {
        $query = MoneyHist::where('money_type', 1)->orderBy('id', 'DESC');      //point history

        $this->search_result = $query->get();


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
