<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\censusOfficer;
use App\Models\censusData;

class censusOfficer extends Controller
{
  
   public function data()
    {
      $data = DB::table('census_data')->get();
      return view ('data', compact('data'));
    }

   // public function connDB(Request $request)
//{
  // dd($request->all());  //to check all the datas dumped from the form
   //if your want to get single element,someName in this case
 //  $name = $request->name; 
 //  $age = $request->age; 
  // $gender = $request->gender; 
 //  $religion = $request->religion;
//   $status = $request->status;
 //  $address = $request->address;
 //  $state = $request->state;    
//}
}
