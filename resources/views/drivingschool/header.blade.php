<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
<!---	<link rel="stylesheet" type="text/css" href="/css/master.css">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
---->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  	<script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
  	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
    body {
      background-image: url('/img/background1.jpg');
      background-repeat: no-repeat;
      background-size: auto;
			position:;
      background-size:cover;
    }

    .head1 {
      opacity: 1.0;
      margin-top: 70px;
		}
    .logo {
      color: pink;
    }
    .logo:hover {
      color: blue;
    }
    h4 {
      color: white;
    }
    h4:hover {
      color: pink;
    }
  .footer {
    background-color: black;
    color: white;
    position: relative;
    left: 0;
    bottom: 0;
    width: auto;
    height: 250px;
    opacity: 1.0;
    border: 1px solid pink;
    border-radius: 10px;
  }
  .fa {
   font-size: 40px;
   font-stretch: 10px;
    padding: 5px;
    width: 60px;
    height: 50px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
     border-radius: 50px;
    margin-top: 10px;
}
  .side {
    margin-left: 50px;
  }

.fa:hover {
   opacity: 0.7;
}

.fa-facebook {
 background: #3B5998;
 color: white;
}

.fa-twitter {
 background: #55ACEE;
 color: white;
}

.fa-google {
 background: #dd4b39;
 color: white;
}

.fa-linkedin {
 background: #007bb5;
 color: white;
}

.fa-youtube {
 background: #bb0000;
 color: white;
}

.fa-instagram {
 background: #125688;
 color: white;
}
 .p1:hover {
  color: lightgreen;
 }
 .g1:hover {
  color: pink;
 }
</style>
    <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
				<div class="row">
				<div class="col-lg-12">
        <div class="navbar-header head">
          <a class="navbar-brand logo" href="#"><h1><strong style="font: ">E-DrivingSchool</strong></h1><h4>  Learn Driving From AnyWhere</h4></a>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="nav navbar-nav head1">
          <li class=""><a href="\drivingschool\home"><strong>Home</strong></a></li>
          <li class=""><a href="\drivingschool\about"><strong>About Us</strong></a></li>
          <li class=""><a href="\drivingschool\register"><strong>Driving Tution</strong></a></li>
          <li class=""><a href="\drivingschool\quote1"><strong>FREE Quote</strong></a></li>

          </li>
          <li>
            <a href="#"></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right head1">
          <li>
            <a href="contact"><span class="glyphicon glyphicon-user"></span> <strong>Sign Up</strong></a>
          </li>
          <li>
            <a href="login"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a>
          </li>
        </ul>
			</div>
		</div>
    </div>
    </nav>

		<marquee width="100%" direction="" height="30%">
          <h1 style="color: #ff2400; font-weight: normal; font-size: 3vw;"><font face="Digital, Arial, Helvetica, sans-serif">E-DrivingSchool <strong><attr style="color: blue;">Learn driving from anywhere</font></attr></strong></h1>
    </marquee>

<!---
    <video width="320" height="240" controls>
    <source src="{{URL::asset('driving.mp4')}}" type="video/mp4">
    <source src="{{URL::asset('driving.ogg')}}" type="video/ogg">
    Your browser does not support the video tag.
    </video>
    ---->


<div class="container">
    @yield('content')


<br><br><br><br>
	
  
  <div class="container footer">
      <div class=row>
        <h3  style="margin-left:20px; margin-top:20px; color: pink"><strong>E-DrivingSchool</strong></h3>
      </div>
    <div class="row">
     <div class="col-lg-5 side">
        <strong>
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Punjab, INDIA</p>
          <p class="p1"><span class="glyphicon glyphicon-phone"></span> +91 9559014486</p>
          <p class="g1"><span class="glyphicon glyphicon-envelope"></span> edrivingschool2019@gmail.com</p>
        </strong>
    </div>

    <div class="col-lg-5">
      <h2><strong>Follow us On--</strong></h2>
         <a href="#" class="fa fa-facebook"></a>
         <a href="#" class="fa fa-twitter"></a>
         <a href="#" class="fa fa-google"></a>
         <a href="#" class="fa fa-linkedin"></a>
         <a href="#" class="fa fa-youtube"></a>
         <a href="#" class="fa fa-instagram"></a>
         <br><br><br><br>
    </div>
  </div> 
</div>
</div>
</body>
</html>
