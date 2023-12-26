<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        if (auth()->check()) {
            return view('order',[
                'title' => 'Order',
                'user' => Auth::user(),
                'orderList' => Order::with(['vehicle','region','status'])->get()
            ]);
        }else{
            return redirect('/');
        }
    }
    public function reject($id){
        if (auth()->check()) {
            Order::whereId($id)->update([
                'status_id' => 2
            ]);
            return redirect('/order');
        }else{
            return redirect('/');
        }
    }
    public function accept($id){
        if (auth()->check()) {
            Order::whereId($id)->update([
                'status_id' => 3
            ]);
            return redirect('/order');
        }else{
            return redirect('/');
        }
    }
    public function done($id){
        if (auth()->check()) {
            Order::whereId($id)->update([
                'status_id' => 4
            ]);
            return redirect('/order');
        }else{
            return redirect('/');
        }
    }

}
