<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use validator;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
	public function index(Request $request){
		if($request->session()->has('username')){
            return redirect()->route('portal.index');
        }else{
            return view('page.login.login');
        }


		
	}

	public function valid(Request $req){
		
		
       $req->validate([

            'u_name'=>'required',
            'u_password'=>'required|max:3',
            
        ]); 


		
		$result	= DB::table('t_users')->where('u_name', $req->u_name)
				 ->where('u_password', $req->u_password)
				 ->get();

		//echo $result;

		if(count($result) > 0){
			
			$req->session()->put('username', $req->u_name );
			//$req->session()->put('dept', $result[0]->u_dept );
			$req->session()->put('type', $result[0]->u_type );
			$req->session()->put('u_password', $result[0]->u_password );
			$req->session()->put('u_dob', $result[0]->u_dob );
			$req->session()->put('u_gender', $result[0]->u_gender );
			$req->session()->put('u_email', $result[0]->u_email );
			$req->session()->put('u_phone', $result[0]->u_phone );
			$req->session()->put('u_pic', $result[0]->u_pic );
			
			//return redirect()->route('home.index');
			return redirect()->route('portal.index');
		}else{
			$req->session()->flash('msg', "⚠️ Invalid Username or Password!");
			
			return redirect()->route('login.index');
			//return view('login.index');
		}

	}

}
