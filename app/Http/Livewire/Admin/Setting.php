<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Option;
use Illuminate\Http\Request;

class Setting extends Component
{
    public $register_point;
    public $setting;
    public $site_options;

    public function updatedRegisterPoint($value)
    {
        $this->register_point = $value;
    }

    public function mount(Request $request)
    {
        $this->setting = Option::get();
        $this->site_options = [];
        foreach($this->setting as $row)
        {
            $this->site_options[$row->key] = $row->val;
        }

        $this->register_point = $this->site_options['register_point'];
    }

    public function save()
    {
        //dd($this->setting);
        Option::updateOrCreate(['key'=>'register_point'],
                                ['val'=>$this->register_point]
                            );
    }

    public function render()
    {
        return view('livewire.admin.setting')
                ->extends('admin.admin_master'
                     , compact( [] ) 
                    )
            ->section('dashboard_content')
            ->with('setting'               , $this->site_options );
    }
}
