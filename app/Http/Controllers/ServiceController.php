<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ServiceSchedule;
use DateTime;


class ServiceController extends Controller
{
    public function index(){
        if (auth()->check()) {
            return view('service',[
                'title' => 'Service Schedule',
                'user' => Auth::user(),
                'serviceSchedule' => ServiceSchedule::with('vehicle')->get(),
                'now' => new DateTime(),
            ]);
        }else{
            return redirect('/');
        }
    }
    public function service($id){
        if (auth()->check()) {
            $dateTmp = new DateTime();
            $dateTmp->modify('+3 months');

            $newDate = $dateTmp->format('Y-m-d');
            ServiceSchedule::whereId($id)->update([
                'scheduled_date' => $newDate
            ]);
            return redirect('serviceSchedule');
        }else{
            return redirect('/');
        }
    }

}
