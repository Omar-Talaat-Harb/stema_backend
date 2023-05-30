<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
USE App\Models\Cell;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function services(){
        return view('doctor.services');
    }

    public function pending(){
       
        if (auth()->user()->role_id==2){
            return view('doctor.pending');
        }
        else{
            //return view('####');
            return'nurse';
        }
    }

    
    public function statistics(){
        //retrieve count of accepted and rejected cells 
        $volume1 = cell::whereBetween('volume',[0,40])->count();
        $volume2 = cell::whereBetween('volume',[40,80])->count();
        $volume3 = cell::whereBetween('volume',[80,120])->count();
        $volume4 = cell::whereBetween('volume',[120,160])->count();
        $volume5 = cell::whereBetween('volume',[160,200])->count();
        $WBCs1= cell:: wherebetween('post_wbcsx109/l',[0,10])->count();
        $WBCs2= cell:: wherebetween('post_wbcsx109/l',[10,20])->count();
        $WBCs3= cell:: wherebetween('post_wbcsx109/l',[20,30])->count();
        $WBCs4= cell:: wherebetween('post_wbcsx109/l',[30,40])->count();
        $WBCs5= cell:: wherebetween('post_wbcsx109/l',[40,50])->count();
        $WBCs6= cell:: wherebetween('post_wbcsx109/l',[50,60])->count();
        $WBCs7= cell:: wherebetween('post_wbcsx109/l',[60,70])->count();
        $approved = Cell::where('result',1)->count();
        $rejected = Cell::where('result',0)->count();
        $data = [
            'approved'  => $approved,
            'rejected'  => $rejected,
            'volume1'   => $volume1,
            'volume2'   => $volume2,
            'volume3'   => $volume3,
            'volume4'   => $volume4,
            'volume5'   => $volume5,
            'WBCs1' =>  $WBCs1,
            'WBCs2' =>  $WBCs2,
            'WBCs3' =>  $WBCs3,
            'WBCs4' =>  $WBCs4,
            'WBCs5' =>  $WBCs5,
            'WBCs6' =>  $WBCs6,
            'WBCs7' =>  $WBCs7,
            
        ];
        return view('statistics')->with('data',$data);
    }

    public function disabledregstration(){
        return view('doctor.disabled.disabledregstration');
    }

    public function disabledcbu(){
        return view('doctor.disabled.disableldCBU');
    }

    public function disabledcollection(){
        return view('doctor.disabled.collectionp1disable');
    }

    public function cell(){
        // return auth()->user()->firstname .' '. auth()->user()->lastname;
        return session()->get('cell');
    }

}
