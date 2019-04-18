@extends('drivingschool.header')

@section('content')
<head>
<!---
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

-->
<style type="text/css">

 .input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}


.input-field {
  width: 100%;
  height: 50px;
  padding: 20px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: slateblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100px;
  opacity: 0.9;
  width: 88%;
  margin-left: 55px;
  border:1px solid pink;
  border-radius: 10px;
}
.btn:hover
{
  background-color: dodgerblue;
}
input[type='text'],input[type='password'] {
  height: 50px;
  width: 500px;
  padding: 10px;
  border:1 px solid pink;
  border-radius: 10px;
}
.frm1 {
  border:1px solid pink;
  border-radius: 10px;
  padding: 10px;
  height: 350px;
  width: 600px;
  background-color: black;
  opacity: 0.5;
}
.fa {
  opacity: 1.0;
}


</style>
</head>
	<body>
		
<form action="/drivingschool/home"  style="max-width:500px;margin:auto">
  {{ csrf_field() }}
  <div class="frm1">
  <h2><strong style="color: pink;"><center>Login</center></strong></h2>
  <hr>
 <!--  <div class="input-container">
   <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>  -->

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">LOGIN</button>
</div>
</form>
	</body>

@endsection