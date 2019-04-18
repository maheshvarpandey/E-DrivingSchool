@extends('drivingschool.header')

@section('content')
<style type="text/css">
    .hh{
        color: white;
        }
   .l1 {
      color: white;
      border: 1px solid black;
      padding: 15px;
      border-radius: 50px;
      width: 400px;
    }
    .l1:hover {
      color: black;
      background-color:#00bfff;
      height: 120%;
      opacity: 1.0;
    }
    .gif {
      border-radius: 10px;
      border: 2px solid black;
      height: ;
      width: 700px;
      opacity: 0.8;
    }
    .gif:hover {
      opacity: 1.0;
    }
    .fact {
      color: black;
    }
    .fact:hover {
      opacity: 1.0;
    }
    .contp:hover {
      opacity: 1.0;
      color: white;
      padding: 10px;
    }
    .im1 {
       height: 300px;
       width: 380px;
       border-radius: 15px;
       border: 1px solid pink;
       opacity: 0.9;
    }

    .im2 {
       height: 300px;
       width: 380px;
       border-radius: 15px;
       border: 1px solid pink;
       opacity: 1.0;
    }
    .im3 {
       height: 300px;
       width: 380px;
       border-radius: 15px;
       border: 1px solid pink;
       opacity: 1.0;
    }
    .im1t {
      opacity: 0.4;
      color: grey;
    }
    .im1t:hover{
      opacity: 1.0;
      padding: 10px;
    }
    .image112 {
      opacity: 0.6;
      color: grey;
    }
    .image112:hover {
      opacity: 1.0;
      padding: 15px;
    }
</style>
<div class="container-fluid-text">
  <h2 class="l1"><strong>Learn Driving with US</strong>
  </h2>
  <br>
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xl-8">
        <img class="gif" src="{{ url('/img/car1.jpg') }}" >
            <div style="position:relative; left:10px;top:-80px;"> 
                <strong class="image112">
                   No Catch! We are so confident 
                   that you will be happy 
                   with us, your first 
                   driving lesson is FREE
                 </strong>
            </div>

          <br>
          <br>
         <img class="gif" src="{{ url('/img/car3.jpg') }}" >
         <div style="position:relative; left:10px;top:-80px;"> 
            <strong class="image112">
              No Catch! We are so confident 
              that you will be happy 
              with us, your first 
              driving lesson is FREE
            </strong>
            </div>

      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <h2 style="color: black;"><strong><u> Facts about <attr style="color: red;">Driving </attr></u> </strong></h2>
         <h3 style="color: black;" class="fact"><strong>Driving</strong></h3>
         <p class="contp" style="color: white;">
          <strong>
            Driving is the controlled operation and movement of a motor vehicle, including cars, motorcycles, trucks, and buses. Permission to drive on public highways is granted based on a set of conditions being met and drivers are required to follow the established road and traffic laws in the location they are driving.
         </strong></p>
         <br>

          <h3 style="color: black;"><strong>Driveabiity</strong></h3>
          <p class="contp" style="color: white;">
            <strong>
           Driveability of a vehicle means the smooth delivery of power, as demanded by the driver. Typical causes of driveability degradation are rough idling, misfiring, surging, hesitation, or insufficient power.
          </strong></p>
          <br>

          <h3 style="color: black;"><strong>Facts</strong></h3>
          <p class="contp" style="color: white;"><strong>
          I represent what is left of a vanishing race, and that is the pedestrian.... That I am still able to be here, I owe to a keen eye and a nimble pair of legs. But I know they'll get me someday. 
          <attr style="color: red;"> ~ Will Rogers </attr>
          </strong></p>
          <br>

          <p class="contp" style="color: white;"><strong>
          A real patriot is the fellow who gets a parking ticket and rejoices that the system works. 
          <attr style="color: red;"> ~Bill Vaughan  </attr>
          </strong></p>
          <br>

          <h3 style="color: black;"><strong></strong></h3>
          <p class="contp" style="color: white;"><strong>
          Anyone driving slower than you is an idiot, and anyone going faster than you is a maniac. ~
          <attr style="color: red;">~ Author Unknown </attr>
          </strong></p>
          


      </div>
  </div>
  <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xl-8 offset-2 ">
          
      </div>
  </div>
</div>
<br>
<div class="container-fluid-text">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-xl-4 hh">
            <div style="position:relative; left:10px;top:100px;"><h4>
             <strong style="color: white">
               First Lession <u style="color: red;">FREE</u>
              </strong>
              </h4>
            </div>

            <img class="im1" src="{{ url('/img/img1.png') }}" />
            <div style="position:relative; left:10px;top:-80px;"> 
                <strong class="im1t">
                   No Catch! We are so confident 
                   that you will be happy 
                   with us, your first 
                   driving lesson is FREE<a href="" style="color: red;">   For more</a></strong>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-xl-4 hh">
            <div style="position:relative; left:10px;top:70px;">
              <h4>
                <strong style="color: white">
                  eDriving Lession <u style="color: red;">Gift Vouchers</u>
               </strong>
              </h4>
            </div>

            <img class="im2" src="{{ url('/img/img2.jpg') }}" />
            <div style="position:relative; left:10px;top:-80px;"> 
                <strong class="im1t">
                   e-Driving Lessons vouchers start from just £15 - 
                   the perfect birthday gift for friends
                    & relatives.
            <a href="" style="color: red;">   For more</a></strong></div>
        </div>


        <div class="col-lg-4 col-md-4 col-xl-4 hh">
            <div style="position:relative; left:10px;top:40px;"><h4>
             <strong style="color: white">
               Become eDriving Lessons <u style="color: red;">Experts</u>
              </strong>
              </h4></div>

            <img class="im3" src="{{ url('/img/imahe3.jpg') }}" />
            <div style="position:relative; left:10px;top:-80px;"> 
                <strong class="im1t">
                   Join one of the fastest 
                   growing driving schools 
                    in the Business.  
                    <a href="" style="color: red;">   For more</a></strong></div>
        </div>
        
    </div>    
</div>

@endsection
