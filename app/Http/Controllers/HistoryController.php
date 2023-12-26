<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Exports\OrderExport;
use Excel;

class HistoryController extends Controller
{
    public function index(){
        if (auth()->check()) {
            $user = Auth::user();
            if($user->id != 1){
                return back();
            }
            return view('history',[
                'title' => 'History',
                'user' => $user,
                'orderHistory' => Order::with(['vehicle','region','status'])->orderByDesc('updated_at')->get()
            ]);
        }else{
            return redirect('/');
        }
    }
    public function export()
    {
        return Excel::download(new OrderExport, 'report.xlsx');
    }

}
