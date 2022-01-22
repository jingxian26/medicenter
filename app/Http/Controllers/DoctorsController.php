<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Doctors;
use Session;
use Auth;

class DoctorsController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 		
    }

    public function add(){
        $r=request(); 
        $image=$r->file('doctorImage');        
        $image->move('images',$image->getClientOriginalName());   
        $imageName=$image->getClientOriginalName(); 
        $addDoctors=Doctors::create([
            'name'=>$r->doctorsName,
            'description'=>$r->description,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Doctor create successfully!");
        Return redirect()->route('showDoctors');
    }

    public function view(){

        $viewDoctors=DB::table('doctors')
        ->get();

        Return view('showDoctors')->with('doctors',$viewDoctors);
    }


    public function delete($id){
        
        $deleteDoctors=Doctors::find($id);
        $deleteDoctors->delete();
        Session::flash('success',"Doctor was delete successfully!");
        Return redirect()->route('showDoctors');
    }

    public function edit($id){

        $doctors=Doctors::all()->where('id',$id);
        Return view('editDoctors')->with('doctors',$doctors);
    }

    public function update(){

        $r=request();
        $doctors =Doctors::find($r->doctorID);
        
        if($r->file('doctorImage')!=''){
            $image=$r->file('doctorImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $doctors->image=$imageName;
            }    
        
        $doctors->name=$r->doctorsName;
        $doctors->description=$r->description;
        $doctors->save();

        Return redirect()->route('showDoctors');
    }
}