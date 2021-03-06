@extends('layout')
@section('content')

<style>
	body{
	background:#F8FBFB;
}
.wrap{
	width:130%;
	margin-left:10%;
}
.header{
	background:url(../images/header-bg.png);
}
.logo{
	float:left;
	margin-top: 14px;
}
.top-nav{
	float:right;
}
.top-nav ul li{
	display:inline-block;
	float: left;
	border-left: 1px solid rgb(31, 132, 224);
}
.top-nav ul li:first-child{
	border-left:none;
}
.top-nav ul li a{
	background:#3391E7;
	color: #fff;
	text-transform: uppercase;
	padding: 30px;
	display: block;
}
.top-nav ul li a:hover{
	
}
.top-nav li.active> a, .top-nav li> a:hover {
	background: rgb(50, 133, 209);
	border-left-color:rgb(50, 133, 209);
}
/*-----content-grids-----*/
.content-grids{
	background:#3391E7;
	padding: 50px 100px;
}
/*  GRID OF THREE   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.listview_1_of_3{
	display: block;
	float:left;
	margin: 0% 0 0% 1.6%;
	background: #F1F6F9;
}
.listimg{
	display: fixed;
	float:left;
}
.text{
	display: block;
	float:left;
	margin: 0% 0 0% 3.6%;
}
.listview_1_of_3:first-child { margin-left: 0; } /* all browsers except IE6 and lower */

.images_1_of_3 {
	width: 29.2%;
	padding:1.5%; 
	border-radius: 1.1em;
}
.listimg_1_of_2{
	width: 32.2%;
}
.list_1_of_2 {
	width: 64.2%;
	margin-top: 5px;
}
.images_1_of_3  img {
	max-width:100%;
	display:block;
}
.list_1_of_2  h3{
	color:#3391E7;
	margin-bottom:0.2em;
	margin-top:0;
	font-size: 1.5em;
	font-weight : normal;
	letter-spacing: -1px;
}
.list_1_of_2  p{
	font-size:0.8125em;	
	color: #3391E7;
	line-height: 1.5em;
	padding:0; 	
}
.list_1_of_2 .button{
	line-height:1.9em;
	margin-top:0.2em;
}
.list_1_of_2 .button a{
		color: rgb(139, 139, 139);
		font-size: 1em;
}
.list_1_of_2 .button a:hover{
        text-decoration:none; 
        color:#3391E7;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:90%;
	}	
}

/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) {
	
	.wrap{
		width:95%;
	}
	.listview_1_of_3{ 
		margin: 2% 0 2% 0%;
	}
	.listview_1_of_4{ 
		margin: 2% 0 2% 0%;
	}
	.text{
		margin:0;
	}	
	.images_1_of_3 {
		width:94%;
		padding:3%;
	}
	.listimg_1_of_2{
	     width:100%;		
   }
	.list_1_of_2 {
		width: 100%;
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	
	.wrap{
		width:95%;
	}
	.listview_1_of_3{ 
		margin: 2% 0 2% 0%;
	}
	.listview_1_of_4{ 
		margin: 2% 0 2% 0%;
	}
	.text{
		margin:0;
	}	
	.images_1_of_3 {
		width:92%;
		padding:4%;
	}
	.listimg_1_of_2{
	     width:100%;		
   }
	.list_1_of_2 {
		width: 100%;
	}
}
</style>

<div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
								

				<div class="listview_1_of_3 images_1_of_3">
					
						  <img src="images/patients.jpg">
					
					<br>
					<div class="text list_1_of_2">
						  <h3>Edit Patients</h3>
						  <div class="button"><span><a href="showPatient">Click Here</a></span></div>
					</div>
				</div>


					<div class="listview_1_of_3 images_1_of_3">
					
						  <img src="images/doctors.jpg">
						  <br>
					<div>
						
					</div>
					<div class="text list_1_of_2">
						<div style="display:flex">
						<h3>Add Doctors</h3>						
						  <div class="button"><p><a href="addDoctors">Click Here</a></p></div>
						  <h3>Edit Doctors</h3>						
						  <div class="button"><p><a href="showDoctors">Click Here</a></p></div>
						</div>
				     </div>
				</div>

			</div>
		    </div>
		   </div>



           @endsection