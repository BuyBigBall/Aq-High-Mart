<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Option;

class Setting extends Component
{
    public $register_point;
    
    public function UpdatedRegisterPoint($value)
    {
        $this->register_point = $value;
        $this->setting->register_point = $value;
    }
    public function save()
    {
        dd($this->setting);
    }

    public function render()
    {
        $this->setting = Option::get();
        $site_options = [];
        foreach($this->setting as $row)
        {
            $site_options[$row->key] = $row->val;
        }
        return view('livewire.admin.setting')
                ->extends('admin.admin_master'
                     , compact( [] ) 
                    )
            ->section('dashboard_content')
            ->with('setting'               , $site_options );
    }
}
