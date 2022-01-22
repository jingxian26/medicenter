
<style>
.box{
  flex:1 1 30rem;
  border-radius: .5rem;
  border:.1rem solid rgba(0,0,0,.1);
  padding: 2em;

  height: 680px;
  width: 400px;
}

.box img{
    height: 80%;
    width: 85%;

}

</style>
@extends('layout')
@section('content')
<div class="row">
    @foreach($doctors as $doctor)
    
    <div class="col-sm-4">
        <div class="card-body">
        <div class="row">
                <div class="box">
                <form action="{{ route('detailDoctors') }}" method="POST">
                    @CSRF

                    <center><h5 class="card-title">{{$doctor->name}}</h5></center>
                    <input type="hidden" name="doctorID" value="{{$doctor->id}}">
                    <center><img src="{{asset('images/')}}/{{$doctor->image}}" alt="" class="img-fluid"></center>
                    <br>
                    <center><h5 class="card-title">{{$doctor->description}}</h5></center>
                </form>
                </div>
</div>
        </div>
    </div>
    @endforeach
</div>
@endsection