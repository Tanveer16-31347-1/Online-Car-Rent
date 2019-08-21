<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function sessionCheck($req){
        if($req->session()->has('username')){
            return true;
        }else{
            return false;
        }
    }

     public function index(Request $req){

       


            $notice = DB::table('t_notice')->get();

                 //echo $notice;

                 return view('page.home.home',  ['notice' => $notice]);
 

        
        }

   
    public function notice($n_id){
    

        $notice = DB::table('t_notice')->where('n_id',$n_id )
                 
                 ->get();

                 //echo $notice;

                 return view('page.home.noticeDetails',  ['notice' => $notice]);

       //do get
       //pass with view
    }

    public function allnotice(Request $req){
    

        $allnotice = DB::table('t_notice')
                 
                 ->get();

                 //echo $notice;

                 return view('page.home.allnoticeDetails',  ['allnotice' => $allnotice]);

      
    }

}








