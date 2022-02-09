<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserManage extends Component
{
    use WithPagination;
    public $perPage;
    public $word;

    protected $search_result;

    public function mount()
    {
        $this->perPage = 20;
    }

    public function updatedWord($value)
    {
        $this->word = $value;
    }

    public function render()
    {
        $query = User::orderBy('id', 'ASC');
        $this->search_result = $query->get();    //paginate( $this->perPage );
        
        return view('admin.livewire.usermanage.index')
            ->extends('admin.admin_master'
                     , compact( []
                    //         'categories',
                    //         'sliders',
                    //         'skip_category_0',
                    //         'skip_category_products_0',
                    //         'skip_brand_0',
                    //         'skip_brand_products_0',
                    //         'selcateid', 'selcatename',
                    //         'searchword'
                             ) 
                    )
            ->section('dashboard_content')
            ->with('pagination'               , $this->search_result    )
            ;
    }
}
