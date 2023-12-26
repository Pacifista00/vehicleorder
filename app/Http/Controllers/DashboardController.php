<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use DB;

class DashboardController extends Controller
{
    public function index(){
        if (auth()->check()) {
            $user = Auth::user();
            return view('dashboard',[
                'user' => $user,
                'title' => 'Dashboard'
            ]);
        }else{
            return redirect('/');
        }
    }
    public function getChart(){
        $data = Order::join('vehicles', 'orders.vehicle_id', '=', 'vehicles.id')
        ->select('vehicles.name as vehicle_name', DB::raw('SUM(orders.bbm) as total_bbm'))
        ->groupBy('orders.vehicle_id', 'vehicles.name')
        ->get();
        return response()->json($data);
    }
}
