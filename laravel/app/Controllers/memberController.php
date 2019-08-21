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




        public function updateMember($c_id,Request $req){
        
    
            //updates

            $newUserRow = DB::table('t_carlist')->where('c_id', $c_id)->get();

                        
                        DB::table('t_carlist')->where('c_id', $c_id)->delete(); //Delete New Users

            DB::table('t_rented')->insert([
                ['r_name' => $newUserRow[0]->c_name,  
                'r_brand' => $newUserRow[0]->c_brand ,
                'r_price' => $newUserRow[0]->c_price ,
                'r_type' => $newUserRow[0]->c_type ,
                             
            ]
                
            ]);      
            //insert to user ends                

                    $req->session()->flash('msg', "✔ New User Added To Your Portal");
                            return redirect()->route('member.carlist');
                    

    }




}


