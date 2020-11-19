<html>
<title>Home Page</title>
<body>
<div>
@include('layouts.navbar')
</div>  
<br> 
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: 0 10rem auto 10rem;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://thebetterindia-english.sgp1.digitaloceanspaces.com/uploads/2018/06/NGO-f.jpg" width="800"; height="400"; alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="data:image/png;base64,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" width="800" height="400" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://thelogicalindian.com/h-upload/2020/01/27/154365-share-bookfb.jpg" width="800"; height="400"; alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="jumbotron jumbotron-fluid">
    <div class="row">
        <div class="col-md 6" style="margin: auto auto auto 2rem" >
        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" height="300" width="600" class="rounded float-left img-fluid" alt="...">
        </div>
        <div class="col-md 6">
            <h1 class="display-4">HOPE</h1>
            <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-fluid">
    <div class="row">
        <div class="col-md 6" style="margin: auto auto auto 2rem">
            <h1 class="display-4"></h1>
            <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        </div>
        <div class="col-md 6" >
        <img src="https://cdn-media-1.freecodecamp.org/images/TKIz7QINBW86qDpRxZj03KU7DiMWcMW08H25" height="300" width="600" class="rounded float-left img-fluid" alt="...">
        </div>
    </div>
</div>
</body>
<html>