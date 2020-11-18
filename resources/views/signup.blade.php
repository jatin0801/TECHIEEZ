<html>
<title>Signup</title>
<body>
<div>
@include('layouts.navbar')
</div>
<div class="col-md-4" style="margin: auto;">
<br>
<h1>Sign Up</h1>
<hr>
<form>
  <div class="form-group">  
  <label class="radio-inline"><input type="radio" name="optradio" checked>&nbsp Student</label> &nbsp
  <label class="radio-inline"><input type="radio" name="optradio">&nbspTeacher</label>
  </div>
  <div class="form-group">
    <label>Name</label>
    <input class="form-control" type="text" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Sign Up</button> &nbsp
  <button type="submit" class="btn btn-light"><a href="{{ route('login')}}" style="text-decoration:none"> Already Registered? Login here.</a></button>
</form>
</div>
</body>
<html>