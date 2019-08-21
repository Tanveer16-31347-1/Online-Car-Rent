<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class memberController extends Controller
{
    public function index(Request $request){

 
		return view('page.portal.member.portal');
		}

	


	public function carlist(Request $request){
    	if($request->session()->get('type') == 'member'){
				


            $carlist	= DB::table('t_carlist')->get();

				 //echo $notice;

				 return view('page.portal.member.carlist.carlistshow',  ['carlist' => $carlist]);
 

		
		}
	else{
		$request->session()->flash('msg', "illigal request!");
            return redirect()->route('login.index');
        }


	}



}


