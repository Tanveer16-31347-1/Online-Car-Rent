<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    public function index()
    {

    	return view('page.registration.registration');
    }





    public function valid(Request $req){
		
		
       $req->validate([

            'u_name'=>'required|unique:t_users',
            'u_password'=>'required|max:3',
            'u_password'=>'required|max:3',
            'uc_password'=>'required|same:u_password|max:3',
            'u_email'=>'required',
            'u_phone'=>'required|unique:t_users',
            'u_dob'=>'required',
            


            
        ]); 


//insert statrs
      // echo $req;

       DB::table('t_users')->insert([
    ['u_name' => $req->u_name,  
    'u_password' => $req->u_password ,
    'u_dob' => $req->u_dob ,
    'u_gender' => $req->u_gender,
    'u_email' => $req->u_email,
    'u_phone' => $req->u_phone,
    'u_type' => $req->u_type,
    'u_pic' => $req->u_pic
]
    
]);


//insert ends
       // //$msg="reg comp";
       //   return view('page.registration.registration')->with('msg', 'complete');
       
       $req->session()->flash('msg', "✔ Your registration request has been submitted to our admin");
        		return redirect()->route('registration.index');

		
		// $result	= DB::table('t_users')->where('u_name', $req->u_name)
		// 		 ->where('u_password', $req->u_password)
		// 		 ->get();

		// //echo $result;

		// if(count($result) > 0){
			
		// 	$req->session()->put('username', $req->u_name );
		// 	$req->session()->put('type', $result[0]->u_type );
			
		// 	//return redirect()->route('home.index');
		// 	return redirect()->route('portal.index');
		// }else{
		// 	$req->session()->flash('msg', "invalid username or password!");
			
		// 	return redirect()->route('login.index');
		// 	//return view('login.index');
		// }

	}
}
