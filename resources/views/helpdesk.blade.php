<html>
<title>Helpdesk</title>
<body>
<div>
@include('layouts.navbar')
</div>
<div class="col-md-4" style="margin: auto;">
    <br>
    <h1>Helpdesk</h1>
    <hr>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successful!</strong> Query has been submitted.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Query</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
</body>
</html>