<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Appointment;
use Session;
use Auth;

class AppointmentController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth'); 		
    }

    public function add(){
        $r=request(); 
        $appointmentForm=Appointment::create([
            'name'=>$r->patientName,
            'number'=>$r->patientNumber,
            'email'=>$r->patientEmail,
            'date'=>$r->appointmentDate,
            'area'=>$r->patientArea,
            'city'=>$r->patientCity,
            'state'=>$r->patientState,
            'code'=>$r->patientCode,
        ]);
        Session::flash('success',"Successfully reserved");
        Return redirect()->route('appointmentForm');
    }

    public function view(){
        $viewPatient=Appointment::all();
        //$viewPatient=DB::table('patients')
        //->get();

        Return view('showPatient')->with('patients',$viewPatient);
    }

    public function delete($id){
        
        $deletePatients=Appointment::find($id);
        $deletePatients->delete();
        Session::flash('success',"Patient was delete successfully!");
        Return redirect()->route('showPatient');
    }

    public function edit($id){

        $patients=Appointment::all()->where('id',$id);
        
        Return view('editPatients')->with('patients',$patients);
        Session::flash('success',"Edit Successfully");
    }

    public function update(){

        $r=request();
        $patients =Appointment::find($r->patientID);

        $patients->name=$r->patientName;
        $patients->number=$r->patientNumber;
        $patients->email=$r->patientEmail;
        $patients->date=$r->appointmentDate;
        $patients->area=$r->patientArea;
        $patients->city=$r->patientCity;
        $patients->state=$r->patientState;
        $patients->code=$r->patientCode;
        $patients->save();

        Session::flash('success',"Edit Successfully");
        Return redirect()->route('showPatient');
            
    }
}
