<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quotes;
use App\signups;
use DB;
class datacontroller extends Controller
{

/*	public function data() {
    $project=DB::table('quotes')->get();//productes::all();
    //return $project;
    return view('contact',compact('project'));

   }
*/
   public function form() {
   		return view('drivingschool.quote');
   }

  /*  public function data(){
    	return view('drivingschool.contact');
    }

     public function form() {
   		return view('drivingschool.quotes');
   }
   */
    public function formdata() {
    /*  $a=new orders();
    	$a->FName = request('fname');
    	$a->LName = request('lname');
    	$a->House = request('house');
    	$a->Pcode = request('code');
    	$a->Pnumber = request('phone');
    	//$a->fname = request('fname');
      $a->save();
    	//DB::table('quotes')->insert([$fname, $lname, $house, $pcode, $phone]);
	*/
   $p = DB::table('orders')->insert(['FName'=>request('fname'), 'LName'=>request('lname'), 'House'=>request('house'), 'Pcode'=>request('code'), 'Pnumber'=>request('phone')]);
    
	/*	  return redirect('drivingschol.contact')->with('fname');
   }

     public function formdata1() {	
      $p = DB::table('signups')->insert(['Uname'=>request('usrnm'),'Email'=>request('email'),'Password'=>request('psw')]);
		  return redirect('drivingschool.login');
   }
*
 /*  public function formdata2() {
   	$u = DB::table('signups')->get('Email');
   	$p = DB::table('signups')->get('Password');
*/
   	return redirect('drivingschool.contact');
   }

   
}
