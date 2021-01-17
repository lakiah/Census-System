<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use DB;

class DetailsController extends Controller
{   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {    //Denied access to guests accept index and show
       $this->middleware('auth',['except' => ['index', 'show']]);
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details_new = Detail::orderBy('created_at','desc')->get();

        return view('details_new.index')->with('details_new',$details_new, );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('details_new.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'birthdate' => 'required',
        'gender' => 'required',
        'religion' => 'required',
        'race' => 'required',
        'martial_status' => 'required',
        'address' => 'required',
 
        ]);

        //Create Detail
        $detail = new Detail;
        $detail->name = $request->input('name');
        $detail->birthdate = $request->input('birthdate');
        $detail->gender = $request->input('gender');
        $detail->religion = $request->input('religion');
        $detail->race = $request->input('race');
        $detail->martial_status = $request->input('martial_status');
        $detail->address = $request->input('address');
        $detail->user_id = auth()->user()->id;
        $detail->save();

      
        $count = DB::table('details_new')->count();
        return redirect('/details_new')->with('success', 'Detail Added');
        
        return view('details_new.index')->with('details_new',$count);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Detail::find($id);
        return view('details_new.show')->with('detail', $detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = Detail::find($id);

        //Check for correct user
        if(auth()->user()->id !==$detail->user_id){
            return redirect('/details_new')->with('error', 'Unauthorized Page');
        }
        // return view('details_new.edit', ['detail'=>$detail]);
        return view('details_new.edit')->with('detail', $detail);
    }

    //  function showData($id)
    // {
    //     $data = Detail::find($id);
    //     return view ('edit',['data'=>$detail]);
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required',
        'birthdate' => 'required',
        'gender' => 'required,',
        'religion' => 'required,',
        'race' => 'required',
        'martial_status' => 'required',
        'address' => 'required',
            ]);
    
            //Create Detail
            $detail = Detail::find($id);
            $detail->title = $request->input('name');
            $detail->body = $request->input('birthdate');
            $detail->title = $request->input('gender');
            $detail->title = $request->input('religion');
            $detail->title = $request->input('race');
            $detail->title = $request->input('martial_status');
            $detail->title = $request->input('address');
            $detail->save();
    
            return redirect('/details_new')->with('success', 'Detail Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail = Detail::find($id);

        //Check for correct user
        if(auth()->user()->id !==$detail->user_id){
            return redirect('/details_new')->with('error', 'Unauthorized Page');
        }
        
        $detail->delete();
        return redirect('/details_new')->with('success,', 'Data Removed');
    }
}
