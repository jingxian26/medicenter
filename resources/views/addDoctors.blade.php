@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Doctors</h3>
        <form action="{{ route('addDoctors') }}" method="POST" enctype="multipart/form-data" >
           @CSRF
            <div class="form-group">
                <label for="DoctorsName">Doctors Name</label>
                <input type="text" class="form-control" id="doctorsName" name="doctorsName">                
            </div>
            <div class="form-group">
                <label for="Description">Doctors Desciption</label>
                <input type="text" class="form-control" id="description" name="description">                
            </div>

            <div class="form-group">
                <label for="DoctorsDescription">Doctors Image</label>
                <input type="file" class="form-control" id="doctorImage" name="doctorImage">                
            </div>
            
            <button type="submit" class="btn btn-primary">Add New</button>
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection