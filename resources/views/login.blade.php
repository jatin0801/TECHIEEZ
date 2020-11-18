<html>
<title>Login</title>
<body>
<div>
@include('layouts.navbar')
</div>
<div class="col-md-4">
<form>
<br>
  <div class="form-group">  
  <label class="radio-inline"><input type="radio" name="optradio" checked>&nbsp Student</label> &nbsp
  <label class="radio-inline"><input type="radio" name="optradio">&nbspTeacher</label>
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
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep me logged in.</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="submit" class="btn btn-light"><a href="{{ route('signup')}}" style="text-decoration:none">New User? Signup here</a></button>
</form>
</div>
</body>
<html>