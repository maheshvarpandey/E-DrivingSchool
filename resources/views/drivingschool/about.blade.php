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
      opacity: 0.4;
      color: red;
    }
    .im1t:hover{
      opacity: 1.0;
      padding: 10px;
    }
    .im2 {
       height: 400px;
       width: 500px;
       border-radius: 15px;
       border: 1px solid pink;
       opacity: 1.0;
    }
</style>
<body>
	<div class="container-fluid-text">
		<div class="row">
			<div class="col-sm-6 col-lg-6 col-xl-6 col-md-6 offset-2">
					<div style="position:relative; left:10px;top:100px;">
					  <h4>
             		  <strong style="color: white">
               				Srajen Singh <u style="color: red;"></u>
              		  </strong>
              		  </h4>
            	    </div>

            		<img class="im1" src="{{ url('/img/img1.png') }}" />
            			<div style="position:relative; left:10px;top:-80px;"> 
                			<strong class="im1t">
                   			Srajen, student at Lovely Professional University, 
                   			Phagwara Punjab 144411, Full stack Developer B.Tech (CSE).
                  			CEO of this site.
                   			</strong>
            			</div>
			 </div>

			         <div class="col-lg-5 col-md-5 col-xl-5 hh">
            <div style="position:relative; left:10px;top:70px;">
              <h4>
                <strong style="color: white">
                  Maheshvar Kumar Pandey<u style="color: red;"></u>
               </strong>
              </h4>
            </div>

            <img class="im2" src="{{ url('/img/mahe.png') }}" />
            <div style="position:relative; left:10px;top:-80px;"> 
                <strong class="im1t">
                  Maheshvar Kumar Pandey, student at Lovely Professional University, Phagwara Punjab 144411, Full stack Developer B.Tech (CSE).
                  Founder of this site.   
                  
            <a href="" style="color: green;">   Learn more</a></strong></div>
        </div>
		</div>		
	</div>
</body>
@endsection