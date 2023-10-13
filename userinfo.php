<?php
  $con = mysqli_connect('localhost','root');

  if($con){
    echo"connection successfull";
  }
  else
  {
    echo"no connection";
  }

  mysqli_select_db($con, 'travel');

  $user = $_POST['user'];
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  $query = "insert into userinfodata( `user`, `email`,  `comment`) VALUES ('$user','$email','$comment')";

  mysqli_query($con, $query);

  header('location:index.php');



?>