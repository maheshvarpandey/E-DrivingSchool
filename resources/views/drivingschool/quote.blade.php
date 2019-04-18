@extends('drivingschool.header')
@section('content')
<style type="text/css">
	.im1 {
       height: 400px;
       width: 550px;
       border-radius: 15px;
       border: 1px solid pink;
       opacity: 0.9;
    }
    .im1t {
      color: green;
      text-orientation: bold;
      width: 400px;
    }
    input[type='text'],input[type='tel'] {
    	height: 30px;
    	width: 400px;
    	border-radius: 10px;
    	border:1px solid pink;
      padding: 10px;
    }
    .s1 {
    	height: 40px;
    	width: 100px;
    	border-radius: 15px;
    	background-color: green;
    	padding: 10px;
    	color: white;
      float: right;
    }
    .s1:hover {
    	background-color: blue;
    	text-orientation: bold;
    }
    .form1 {
    	border:1px solid pink;
    	border-radius: 15px;
    	padding: 10px;
    	background-color: black;
    	opacity: 0.5;
    }
    label {
    	color: white;
    }
    label:hover {
    	color: pink;
    }
</style>
<div class="container-fluid-text">
	<div class="row">
		<div class="col-lg-5 col-md-5 col-xl-5 form1">
			<h2 style="color: pink;">Get Free Quote</h2>
			<hr>
			<form id="" method="get" action="quote">
  		  {{ csrf_field() }} 
  				<div>
   					 <label>First Name</label>
   					 <p></p>
    					<input type="text" id="" name="fname" value="">
 				 </div>
  
 				 <div>
   					<label>Last Name</label>
   					<p></p>
    					<input type="text" id="" name="lname" value="">
 				 </div>

 				 <div>
   					<label>House/Street</label>
   					<p></p>
    					<input type="text" id="" name="house" value="">
 				 </div>

 				  <div>
   					<label>Post Code</label>
   						<p></p>
    					<input type="text" id="" name="code" value="">
 				 </div>

 				  <div>
   					<label>Phone Number</label>
   						<p></p>
    					<input type="tel" id="" name="phone" value="">
 				 </div>
    
      <input type="hidden" name="_token" value="{{ csrf_token()}}">
 				 <div>
 				 	<p></p>
   					 <input type="submit" value="Book.."  class="s1">
  				</div>
</form>
		</div>
		<div class="col-lg-5 col-md-5 col-xl-5">
			<div style="position:relative; left:10px;top:100px;">
					  <h4>
             		  <strong style="color: white">
               				 <u style="color: red;"></u>
              		  </strong>
              		  </h4>
            	    </div>

            		<img class="im1" src="{{ url('/img/formcar.png') }}" />
            			<div style="position:relative; left:10px;top:-80px;"> 
                			
            			</div>
            			<h1>
            			<strong class="im1t">
                   			Pass Quicker & Save Money
                   		</strong></h1>
		</div>
	</div>
</div>
@endsection