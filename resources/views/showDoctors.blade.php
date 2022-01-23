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
                        <td>Doctor Image</td>
                        <td>Doctor Name</td>
                        <td>Doctor Description</td>
                    </tr>
                <head>
                <body>
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{$doctor->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$doctor->image}}" width="100" class="img-fluid" alt=""></td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->description}}</td>
                        <td><a href="{{ route('editDoctors',['id'=>$doctor->id])}}" class="btn btn-warning btn-xs">Edit</a> <a href="{{ route('deleteDoctors',['id'=>$doctor->id])}}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure to delete?')">Delete</a></td>

                    </tr>
                    @endforeach
                </body>
            </table>
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection