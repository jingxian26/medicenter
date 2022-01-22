@extends('layout')
@section('content')

<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

    <body>
      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book You Slot Now and Save your time</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis at lacus at rhoncus. Integer pharetra lacus vitae sapien blandit eleifend. </p>
                        <h2>For Help Call : +60123456789</h2>
                    </div>
                </div>
                <div class="col-sm-5">
                  
                    <form action="{{ route('appointmentForm') }}" method="POST" enctype="multipart/form-data" >
                    @CSRF
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointemnt</h2>
                        </div>
                        <div class="form-body">
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Full name" class="form-control" id="patientName" name="patientName">
                            </div>
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Mobile Number" class="form-control" id="patientNumber" name="patientNumber">
                            </div>
                             <div class="row form-row">
                              <input type="text" placeholder="Enter Email Adrress" class="form-control" id="patientEmail" name="patientEmail">
                            </div>
                           <div class="row form-row">
                              <input id="dat" type="text" placeholder="Appointment Date" class="form-control" id="appointmentDate" name="appointmentDate">
                            </div>
                            
                            <h6>Address Details</h6>

                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter Area" class="form-control" id="patientArea" name="patientArea">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter City" class="form-control" id="patientCity" name="patientCity">
                                </div>
                            </div>
                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter State" class="form-control" id="patientState" name="patientState">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Postal Code" class="form-control" id="patientCode" name="patientCode">
                                </div>
                            </div>

                             <div class="row form-row">
                               <button type="submit" class="btn btn-success btn-appointment">
                                 Book Appointment
                               </button>
                               
                            </div>
                            
                            

                        </div>
                        
                    </div>
</form>
                    <br><br><br><br>
                </div>
            </div>
          </div>
      </div>
      
    </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
  
</html>
@endsection