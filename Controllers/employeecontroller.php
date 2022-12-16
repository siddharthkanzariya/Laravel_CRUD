<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeecontroller extends Controller
{
    public function insertform(){
        return view('/employee_insert_form');
    }

    public function formprocess(Request $request){
        $name = $request->input('txt1');
        $email = $request->input('txt2');
        $mobile = $request->input('txt3');

        DB::table('employee')->insert(
            ['name'=>$name,'email'=>$email,'mobile'=>$mobile]
        );
        echo "<script>alert('Record Inserted!');</script>";
        echo "<a href='empinsert'>Previous Page</a>";
    }

    public function displaydata(){
        $data = DB::table('employee')->get();
        //dd($data);
        return view('employee_display_table',compact('data'));
    }

    public function deletedata($id){
        DB::table('employee')->where('id','=',$id)->delete();
        return redirect('/displayempdata');
    }

    public function editdata($id){
        $fetchdata = DB::table('employee')->where('id', '=', $id)->first();
        //dd($fetchdata);
        return view('employee_edit_table', compact('fetchdata'));
    }
    public function updatedata(Request $request){
        $id = $request->input('txt0');
        $name = $request->input('txt1');
        $email = $request->input('txt2');
        $mobile = $request->input('txt3');

        DB::table('employee')
            ->where('id', $id)
            ->update(['name' => $name, 'email' => $email, 'mobile' => $mobile]);
        echo "<script>alert('Record Updated!');</script>";
        echo "<a href='displayempdata'>Previoues Page</a>";
    }
}

