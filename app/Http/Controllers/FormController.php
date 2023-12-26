<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Region;
use App\Models\Vehicle;
use App\Models\Order;

class FormController extends Controller
{
    public function index(){
        if (auth()->check()) {
            $user = Auth::user();
            if($user->id != 2){
                return back();
            }
            return view('form',[
                'title' => 'Form',
                'user' => $user,
                'regionList' => Region::all(),
                'vehicleList' => Vehicle::all()
            ]);
        }else{
            return redirect('/');
        }
    }
    public function submit(Request $request){
        $order = Order::create([
            'driver' => $request->driver,
            'region_id' => $request->region,
            'vehicle_id' => $request->vehicle,
            'bbm' => $request->bbm,
            'status_id' => 1,
        ]);
 
        return redirect('/form');
    }

}
