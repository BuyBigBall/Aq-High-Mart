<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\User;

class AdminDashboard extends Component
{
    private $shipping;
    public function render()
    {
        $this->shipping = [];

        $userQuery = User::where('status', 0)->get();
        $user_count = $userQuery->count();
        $this->shipping['users'] = ['cnt'=>$user_count, 'amount'=>0];

        $pending_cnt = 0;        $pending_qty = 0;
        $orderQuery = Order::where('status', 'pending')->get();
        foreach($orderQuery as $row)
        {
            $pending_cnt++;            $pending_qty += $row->amount;
        }
        $this->shipping['pending'] = ['cnt'=>$pending_cnt, 'amount'=>$pending_qty];

        $confirmed_cnt = 0;        $confirmed_qty = 0;
        $orderQuery = Order::where('status', 'confirmed')->get();
        foreach($orderQuery as $row)
        {
            $confirmed_cnt++;            $confirmed_qty += $row->amount;
        }
        $this->shipping['confirmed'] = ['cnt'=>$confirmed_cnt, 'amount'=>$confirmed_qty];

        $processing_cnt = 0;        $processing_qty = 0;
        $orderQuery = Order::where('status', 'processing')->get();
        foreach($orderQuery as $row)
        {
            $processing_cnt++;            $processing_qty += $row->amount;
        }
        $this->shipping['processing'] = ['cnt'=>$processing_cnt, 'amount'=>$processing_qty];

        $picked_cnt = 0;        $picked_qty = 0;
        $orderQuery = Order::where('status', 'picked')->get();
        foreach($orderQuery as $row)
        {
            $picked_cnt++;            $picked_qty += $row->amount;
        }
        $this->shipping['picked'] = ['cnt'=>$picked_cnt, 'amount'=>$picked_qty];

        $shipped_cnt = 0;        $shipped_qty = 0;
        $orderQuery = Order::where('status', 'shipped')->get();
        foreach($orderQuery as $row)
        {
            $shipped_cnt++;            $shipped_qty += $row->amount;
        }
        $this->shipping['shipped'] = ['cnt'=>$shipped_cnt, 'amount'=>$shipped_qty];


        return view('livewire.admin.admin-dashboard')
                ->extends('admin.admin_master'
                     , compact( [] ) 
                    )
            ->section('dashboard_content')
            ->with('shipping'               , $this->shipping );
            //->with('shipping'               , $this->shipping )
    }
}
