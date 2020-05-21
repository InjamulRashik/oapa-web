<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/selection.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    <title>Location</title>
  </head>

  <body>
    <form action="" method="post">
      <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"
            ><img src="../icons/navlogo.png" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse nav justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="nav-button" href="#login"
                  >Login/Register</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <h1>
        APA Selection Form
      </h1>

      <div class="row">

        <div class="col-md-4 d-flex justify-content-around ">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Maids</label><br />
            </div>

            <div class="card-body d-flex justify-content-around">
      <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr id="tr_head"class=" text-white text-center">
 
 <th> MaidId </th>
 <th> Maid Name </th>
 <th> Hourley Rate </th>
 <th> Selection</th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from maid ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr id="tr_body" class="text-center">
 <td> <?php echo $res['maidid'];  ?> </td>
 <td> <?php echo $res['maidname'];  ?> </td>
 <td> <?php echo $res['maidrate'];  ?> </td>
 <td> <button id="btn" class="btn-primary btn"> <a href="maid_update.php?maidid=<?php echo $res['maidid']; ?>" class="text-white"> Select </a>  </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  
            </div>
            
          </div>
        </div>

        <div class="col-md-4 d-flex justify-content-around">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Baby-Sitters</label>
            </div>

            <div class="card-body d-flex justify-content-around">
              <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr id="tr_head"class=" text-white text-center">
 
 <th> BabyId </th>
 <th> Baby-Sitter Name </th>
 <th> Hourley Rate </th>
 <th> Selection </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from baby ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr id="tr_body" class="text-center">
 <td> <?php echo $res['babyid'];  ?> </td>
 <td> <?php echo $res['babyname'];  ?> </td>
 <td> <?php echo $res['babyrate'];  ?> </td>
 <td> <button id="btn" class="btn-primary btn"> <a href="baby_update.php?babyid=<?php echo $res['babyid']; ?>" class="text-white"> Select </a>  </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  
           
          </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-around">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Approximate Payment</label>
            </div>

            <div class="card-body">
              <div class=img>
                <img src="../icons/userdp.png" alt="" class="user"><br>
                        <label id="username" for="">Test Ahmed Khan</label><br>
                        <label id="address" for="">Dhaka,Bangladesh</label>
              </div>
              <div class="payment">
                <div id="info-section"class="d-flex justify-content-between"><h6  for="">Service Hour</h6><h6 >1 Hour</h6> </div> <br>
                <br>
                 <div  class="d-flex justify-content-between"><h6  for="">Charge</h6><h6 >100 BDT</h6> </div> <br>
                  <div id="info-section" class="d-flex justify-content-between"><h6  for="">Service Charge</h6><h6 >10 %</h6> </div> <br>
                  <br>
                   <div class="d-flex justify-content-between"><h6  for="">Total Charge</h6><h6 >110 BDT</h6> </div> <br>
                <p>NB: All charges are expected, depends on your <span>service time</span></p>
              </div>
          </div>
          </div>
        </div>
      </div>
    </form>
    <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
    <script src="../jquery/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
