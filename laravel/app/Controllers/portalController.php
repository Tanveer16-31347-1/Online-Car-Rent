<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class portalController extends Controller
{
	
    

    public function index(Request $req){

        
        	
        	if($req->session()->get('type') == 'faculty')
        	{
                 return redirect()->route('faculty.index');
        		//return view('page.portal.faculty.portal');
        	}
        	
        	if($req->session()->get('type') == 'admin')
        	{
        		return redirect()->route('admin.index');
        	}
        	
        	if($req->session()->get('type') == 'member')
        	{
        		return redirect()->route('member.index');
        	}
        	
        	if($req->session()->get('type') == 'student')
        	{
        		return redirect()->route('student.index');
        	}

        	else{
        		$req->session()->flash('msg', "illigal usertype or request!");
        		return redirect()->route('login.index');
        	    }

            

    }

public function profile()
                 {
        return view('page.portal.profile.profile');
                 }






    public function updateProfile(Request $req){
        
        
       $req->validate([

            
            'u_name'=>'required',
            'u_email'=>'required',
            'u_phone'=>'required',
            'u_pic'=>'required',
            'u_dob'=>'required',
            'u_password'=>'required',
            'uc_password'=>'required|same:u_password',
            
            


            
        ]); 


DB::table('t_users')->where('u_name', $req->session()->get('username'))
->update([
    
         
    'u_name' => $req->u_name ,
    'u_email' => $req->u_email ,
    'u_phone' => $req->u_phone,
    'u_dob' => $req->u_dob,
    'u_pic' => $req->u_pic,
    'u_password' => $req->u_password
    
]);


DB::table('t_course_faculty')->where('c_faculty_faculty', $req->session()->get('username'))
->update([
    
         
    'c_faculty_faculty' => $req->u_name 
    
    
]);



DB::table('t_course_grade')->where('g_student', $req->session()->get('username'))
->update([
    
         
    'g_student' => $req->u_name 
    
    
]);



DB::table('t_course_student')->where('c_student_faculty', $req->session()->get('username'))
->update([
    
         
    'c_student_faculty' => $req->u_name 
    
    
]);


DB::table('t_course_student')->where('c_student_student', $req->session()->get('username'))
->update([
    
         
    'c_student_student' => $req->u_name 
    
    
]);


DB::table('t_tsf')->where('t_name', $req->session()->get('username'))
->update([
    
         
    't_name' => $req->u_name 
    
    
]);


DB::table('t_room_request')->where('r_faculty', $req->session()->get('username'))
->update([
    
         
    'r_faculty' => $req->u_name 
    
    
]);

















       // echo 'profile update called';


          $req->session()->put('username', $req->u_name );
          
            $req->session()->put('u_password', $req->u_password );
            $req->session()->put('u_dob', $req->u_dob );
            
            $req->session()->put('u_email', $req->u_email );
            $req->session()->put('u_phone', $req->u_phone );
            $req->session()->put('u_pic', $req->u_pic);

        $req->session()->flash('msg', "✔ Your Profile Information has been Updated");
                return redirect()->route('portal.profile');
        

    }


}
