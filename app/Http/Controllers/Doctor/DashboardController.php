<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function services(){
        return view('dotctor.services');
    }

    public function pending(){
        if(auth()->user()->role_id==2){
            return redirect()->route('dotctor.pending');
        }
        else{
            //return redirect()->route('####');
            return'nurse';
        }
        
    }

    public function disabledregstration(){
        return view('dotctor.disabled.disabledregstration');
    }

    public function disabledcbu(){
        return view('dotctor.disabled.disableldCBU');
    }

    public function disabledcollection(){
        return view('dotctor.disabled.collectionp1disable');
    }

    public function cell(){
        // return auth()->user()->firstname .' '. auth()->user()->lastname;
        return session()->get('cell');
    }

}
