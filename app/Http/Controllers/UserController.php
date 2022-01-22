<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Doctors;
use Session;

class UserController extends Controller
{
    public function view(){

        $viewDoctors=DB::table('doctors')
        ->get();

        Return view('detailDoctors')->with('doctors',$viewDoctors);
    }

    public function searchDoctor(){
        $r = request();
        $keyword = $r->keyword;
        $doctors = DB::table('doctors') -> where('name', 'like', '%'.$keyword.'%')->get();
        
        return view('detailDoctors') -> with('doctors', $doctors);
    }
}
