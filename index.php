<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="index.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="#">INDIA TRAVELS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="index.php" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact us</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>    
    </ul>
  </div>  
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
   
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" alt="Los Angeles" width="100%" height="700">
      <div class="carousel-caption">
        <h3>NANITAL</h3>
        <p>This place is famous Naina Temple</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="Chicago" width="100%" height="700">
      <div class="carousel-caption">
        <h3>RAMESHWARAM</h3>
        <p>This place is famous Rameshwaram Temple</p>
      </div>   
    </div>
    
      <div class="carousel-item">
      <img src="images/img4.jpg" alt="New York" width="100%" height="700">
      <div class="carousel-caption">
        <h3>TAJ MAHAL</h3>
        <p>It is one of the seven Wonders</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img5.jpg" alt="New York" width="100%" height="700">
      <div class="carousel-caption">
        <h3>AMRITSAR</h3>
        <p>This place is famous GURU NANAK Temple</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class= "my-3">

  <div class="my-3">
    <h3 class="text-center" id="about">About us</h3>

  </div> 

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-mid-4 col-12 ">
        <img src="images/img4.jpg" alt="" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-4 col-mid-4 col-12 ">
        <h2 class="display-4">Travel Agencey in INDIA</h2>
        <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Ut quam animi doloribus quaerat sapiente 
          facere nobis dolor, quasi neque itaque.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Ut quam animi doloribus quaerat sapiente 
          facere nobis dolor, quasi neque itaque.
        </p>
        <a href="about.php"  class ="btn btn-success">check More</a>
      </div>
    </div>
  </div>

  
</section>



<section class= "my-1">

  <div class="py-1">
    <h3 class="text-center">Our Services</h3>
  </div>

  <div>
    <div class="row ml-2">
        <div class="card" style="width:370px">
            <img class="card-img-top" src="images/bus.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">buses</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
        <div class="card" style="width:370px">
            <img class="card-img-top" src="images/cc1.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Cars</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
        <div class="card" style="width:370px">
            <img class="card-img-top " src="images/cc2.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Cars</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
        <div class="card" style="width:370px">
            <img class="card-img-top " src="images/cc2.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Van</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
    </div>
  </div>

  
</section> 


<section class="my-2">
<div class="py-2">
    <h3 class="text-center">Gallery</h3>
  </div> 

  <div class="container-fluid">
     <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/img4.jpg" alt="" class="img-fluid pb-1">
      </div>


     </div>
  </div>

</section>



<section class="my-3">
  <div class="my-3">
    <h3 class="text-center">Contact us</h3>
  </div> 
  

<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
    <div class="form-group " >
      <label for="name">UserName</label>
      <input type="text" name="user" class="form-control" autocomplet="off" placeholder="Enter name" id="name">
    </div>
    <div class="form-group " >
      <label for="name">email</label>
      <input type="text" name="email" class="form-control" autocomplet="off" placeholder="Enter email" id="email">
    </div>
   
    <div class="form-group " >
      <label for="comment">comment</label>
      <textarea  class="form-control" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-success" >Submit</button>
  </form>

</div> 
</section>


<br>





<footer>
  <p class="p-3 bg-dark text-white">ALL INDIA TRAVEL AGENCEY</p>
</footer>







  </body>
</html>