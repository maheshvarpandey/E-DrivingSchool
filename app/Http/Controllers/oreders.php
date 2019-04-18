<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\edrivingschool;
use DB;
use App\signups;
use App\orders;

class oreders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $user = new orders();
      /*  $user->FName = Input::get("fname");
        $user->LName = Input::get("lname");
        $user->House = Input::get("house");
        $user->Pcode = Input::get("code");
        $user->Pnumber = Input::get("phone");
      //  $user->FName = Input::get("fname");

      */
        
        $user->FName = request('fname');
        $user->LName = request('lname');
        $user->House = request('house');
        $user->Pcode = request('code');
        $user->Pnumber = request('phone');
        $user->save();
        return redirect('/drivingschool/contact1');

    }
    public function signup()
    {
        $user1 = new signups();        
        $user1->Uname = request('usrnm');
        $user1->Email = request('email');
        $user1->Password = request('psw');
        $user1->save();

       // $a = DB::table('signups')->get();
        return redirect('/drivingschool/login');

    }
    /**
     * Display the specified resource.
     *
      @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
