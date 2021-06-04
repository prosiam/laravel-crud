<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get data from staff table
        $staff=Staff::all();

        // show index page with staff data
        return view("staff.index",[
            'staffs' => $staff
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show create page
        return view("staff.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Staff::create([
            'name' => $request->name,
            'email' => $request->email,
            'cell' => $request->cell,
            'uname' => $request->username,
        ]);
        return redirect() -> route('staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show show page
        return view("staff.show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // get data from staff table
         $edit_data=Staff::find($id);

        // show edit page with old data
        return view("staff.edit", compact('edit_data') ) ;
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
        $update_data=Staff::find($id);
        $update_data ->name=$request->name;
        $update_data ->email=$request->email;
        $update_data ->cell=$request->cell;
        $update_data ->uname=$request->username;
        $update_data ->update();
        return redirect() -> route('staff.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $delete_id= Staff::find($id);
        $delete_id -> delete();
        return redirect() -> route('staff.index');
    }
}
