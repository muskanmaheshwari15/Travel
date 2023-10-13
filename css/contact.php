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
 

<div class="jumbotron">
  <h1>ALL INDIA TRAVEL AGENCEY</h1>
  <p>Enjoy the differrent cultures . Happy journey :)</p>
</div>


<section class="my-3">
  <div class="py-3">
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




<footer>
  <p class="p-3 bg-dark text-white">ALL INDIA TRAVEL AGENCEY</p>
</footer>





  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</body>
</html>