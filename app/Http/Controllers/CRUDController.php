<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CRUDController extends Controller {
   public function create() {
      return view('crud.create');
   }
	
   public function submitCreate(Request $request) {
    //   DB::table('spaceship')->insert(
    //       array(
    //         'spaceship_name' => $request->input('ship_name'),
    //         'spaceship_type' => $request->input('ship_type'),
    //         'spaceship_fuel' => $request->input('ship_fuel'),
    //         'spaceship_origins' => $request->input('ship_origins'),
    //         'spaceship_propulsion' => $request->input('ship_propulsion'),
    //         'spaceship_details' => $request->input('ship_details')
    //       )
    //       );
    
          return back()->with('success','Ship Created successfully!');
          
  

   }
}