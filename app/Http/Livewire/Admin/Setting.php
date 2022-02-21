<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Option;
use Illuminate\Http\Request;

class Setting extends Component
{
    public $register_point;
    public $login_point;
    public $buy_point;
    public $setting;
    public $site_options;

    public function updatedRegisterPoint($value)
    {
        $this->register_point = $value;
    }
    public function updatedLoginPoint($value)
    {
        $this->login_point = $value;
    }
    public function updatedBuyPoint($value)
    {
        $this->buy_point = $value;
    }

    public function mount(Request $request)
    {
        $this->setting = Option::get();
        $this->site_options = [];
        foreach($this->setting as $row)
        {
            $this->site_options[$row->key] = $row->val;
        }

        $this->register_point = $this->site_options['register_point'] ?? 0;
        $this->login_point = $this->site_options['login_point'] ?? 0;
        $this->buy_point = $this->site_options['buy_point'] ?? 0;
    }
    public function doClose()
    {
        back(201);
    }
    public function save()
    {
        //dd($this->setting);
        Option::updateOrCreate(['key'=>'register_point'],['val'=>$this->register_point]);
        Option::updateOrCreate(['key'=>'login_point'],['val'=>$this->login_point]);
        Option::updateOrCreate(['key'=>'buy_point'],['val'=>$this->buy_point]);
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
