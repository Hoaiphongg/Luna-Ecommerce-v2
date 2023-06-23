<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->get()->take(10);
        $totalSale = Order::where('status','ordered')->count();
        $totalRevenue = Order::where('status','ordered')->sum('total');
        $todaySale = Order::where('status','ordered')->whereDate('created_at',Carbon::today())->count();
        $todayRevenue = Order::where('status','ordered')->whereDate('created_at',Carbon::today())->sum('total');
        return view('livewire.admin.admin-dashboard-component',[
            'orders' => $orders,
            'totalSale' => $totalSale,
            'totalRevenue' => $totalRevenue,
            'todaySale' => $todaySale,
            'todayRevenue' => $todayRevenue,
        ]);
    }
}