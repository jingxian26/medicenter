@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
            <table class="table table-bordered">
                <head>
                    <tr>
                        <td>ID</td>
                        <td>Patient Name</td>
                        <td>Patient No</td>
                        <td>Patient Email</td>
                        <td>Appoinment Date</td>
                        <td>Patient Area</td>
                        <td>Patient City</td>
                        <td>Patient State</td>
                        <td>Patient Code</td>
                        <td>Action</td>
                    </tr>
                <head>
                <body>
                    @foreach($patients as $patient)
                    <tr>
                        <td>{{$patient->id}}</td>
                        <td>{{$patient->name}}</td>
                        <td>{{$patient->number}}</td>
                        <td>{{$patient->email}}</td>
                        <td>{{$patient->date}}</td>
                        <td>{{$patient->area}}</td>
                        <td>{{$patient->city}}</td>
                        <td>{{$patient->state}}</td>
                        <td>{{$patient->code}}</td>
                        <td><a href="{{ route('editPatients',['id'=>$patient->id])}}" class="btn btn-warning btn-xs">Edit</a> <a href="{{ route('deletePatients',['id'=>$patient->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>

                    </tr>
                    @endforeach
                </body>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection