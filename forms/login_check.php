<?php

$conn = mysqli_connect("localhost","root","","oapa");

if(isset($_POST["submit"])){

  $phone = $_POST["phone"];
  $pin = $_POST["pin"];

  $sql = mysqli_query($conn,"SELECT count(*) as total FROM user WHERE phone = '".$phone."' AND pin = '".$pin."'") or die(mysqli_error($conn));

  $rw = mysqli_fetch_array($sql);

  if($rw['total']>0){
    header("Location:location.html");
    exit();
  }
  else{
    header("Location:login.php?chk=false");
    exit();
  }
}


?>