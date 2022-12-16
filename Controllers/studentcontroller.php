<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{
    public function insertform(){
        return view('/student_insert_form');
    }
    public function formprocess(Request $request){
        $name = $request->input('txt1');
        $sname = $request->input('txt2');
        $gender = $request->input('txt3');

        // echo "Name is " . $name . "Surname is " . $sname . "Gender is " . $gender;
        DB::table('student')->insert(
            ['name' => $name, 'sname' => $sname, 'gender' => $gender]
        );
        echo "<script>alert('Record Inserted!');</script>";
        echo "<a href='studentinsert'>Previous Page</a>";
    }
    public function displaydata(){
        $data = DB::table('student')->get();
        //dd($data);
        return view('student_display_table',compact('data'));
    }
    public function deletedata($id){
        DB::table('student')->where('id', '=', $id)->delete();
        return redirect('/displaystdata');
    }

    public function editdata($id){
        $fetchdata = DB::table('student')->where('id', '=', $id)->first();
        //dd($fetchdata);
        return view('student_edit_table' , compact('fetchdata'));
    }
    public function updatedata(Request $request){
        $txt0 = $request->input('txt0');
        $txt1 = $request->input('txt1');
        $txt2 = $request->input('txt2');
        $txt3 = $request->input('txt3');
        DB::table('student')
            ->where('id', $txt0)
            ->update(['name'=>$txt1,'sname'=>$txt2,'gender'=>$txt3]);

        echo "<script>alert('Record Updated!');</script>";
        echo "<a href='displaystdata'>Previous Page</a>";
    }
}
