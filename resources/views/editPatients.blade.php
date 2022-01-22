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
        <h3>Update Patients</h3>
        <form action="{{ route('updatePatients') }}" method="POST" enctype="multipart/form-data" >
           @CSRF

           @foreach($patients as $patient)
            <div class="form-group">
                <label for="patientName">Patient Name</label>
                <input type="text" class="form-control" id="patientName" name="patientName" value="{{$patient->name}}"> 
                <input type="hidden" name="patientID" id="patientID" value="{{$patient->id}}">               
            </div>
            <div class="form-group">
                <label for="patientNumber">Patient Number</label>
                <input type="text" class="form-control" id="patientNumber" name="patientNumber" value="{{$patient->number}}" >                
            </div>
            <div class="form-group">
                <label for="patientEmail">Patient Email</label>
                <input type="text" class="form-control" id="patientEmail" name="patientEmail" value="{{$patient->email}}">                
            </div>
            <div class="form-group">
                <label for="productPrice">Appointment Date</label>
                <input id="dat" type="text" class="form-control" id="appointmentDate" name="appointmentDate" value="{{$patient->date}}">                
            </div>
            <div class="form-group">
                <label for="productPrice">Patient Area</label>
                <input type="text" class="form-control" id="patientArea" name="patientArea" value="{{$patient->area}}">                
            </div>
            <div class="form-group">
                <label for="productPrice">Patient City</label>
                <input type="text" class="form-control" id="patientCity" name="patientCity" value="{{$patient->city}}">                
            </div>
            <div class="form-group">
                <label for="productPrice">Patient State</label>
                <input type="text" class="form-control" id="patientState" name="patientState" value="{{$patient->state}}">                
            </div>
            <div class="form-group">
                <label for="productPrice">Postal Code</label>
                <input type="text" class="form-control" id="patientCode" name="patientCode" value="{{$patient->code}}">                
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection