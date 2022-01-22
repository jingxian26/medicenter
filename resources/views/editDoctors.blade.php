<head>
<link rel="stylesheet" type="text/css" href="{{url('css/style2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap')}}">
<link rel="stylesheet" type="text/css" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('css/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}">
</head>
@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Update Doctors</h3>
        <form action="{{ route('updateDoctors') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($doctors as $doctor)
           <div class="form-group">
                <label for="DoctorName">Doctor Name</label>
                <input type="text" class="form-control" id="doctorsName" name="doctorsName" value="{{$doctor->name}}">                
                <input type="hidden" name="doctorID" id="doctorID" value="{{$doctor->id}}">
            </div>
            <div class="form-group">
                <label for="Description">Doctor Desciption</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$doctor->description}}">                
            </div>

            <div class="form-group">
                <label for="Description">Doctor Image</label>
                <img src="{{asset('images')}}/{{$doctor->image}}" alt="" class="img-fluid" width="100">
                <input type="file" class="form-control" id="doctorImage" name="doctorImage" value="">                
            </div>

            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection