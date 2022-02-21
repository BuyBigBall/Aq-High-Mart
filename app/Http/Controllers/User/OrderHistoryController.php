<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\MoneyHist;

class OrderHistoryController extends Controller
{
    public function orderHistory()
    {
        $orders = Order::where('user_id', Auth::id())->orderBy('id', 'DESC')->get();
        $user = User::find(Auth::id());
        return view('frontend.order.order-history', compact('orders', 'user'));
    }

    public function moneyHistory()
    {
        $moneys = MoneyHist::where('user_id', Auth::id())->where('money_type', 1)->orderBy('id', 'DESC')->get();
        $user = User::find(Auth::id());
        return view('frontend.order.money-history', compact('moneys', 'user'));
    }

    public function pointHistory()
    {
        $points = MoneyHist::where('user_id', Auth::id())->where('money_type', 2)->orderBy('id', 'DESC')->get();
        $user = User::find(Auth::id());
        return view('frontend.order.point-history', compact('points', 'user'));
    }
}
