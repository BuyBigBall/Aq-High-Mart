<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends Controller
{
    public function orderHistory()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        $user = User::find(Auth::id());
        return view('frontend.order.order-history', compact('orders', 'user'));
    }
}
