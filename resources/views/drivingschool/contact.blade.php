@extends('drivingschool.header')
@section('title','contact us')
@section('content')
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
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
  height: 430px;
  width: 600px;
  background-color: black;
  opacity: 0.5;
}
.fa {
  opacity: 1.0;
}

</style>

</style>
</head>
<body>

<form method="get" action="contact" style="max-width:500px;margin:auto">
  {{ csrf_field() }}
  <div class="frm1">
  <h2><strong style="color: pink;"><center>Sign up</center></strong></h2>
  <hr>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>
  <input type="hidden" name="_token" value="{{ csrf_token()}}">

  <button type="submit" class="btn">Register</button>
</div>
</form>


</body>
@endsection
