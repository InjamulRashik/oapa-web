

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/location.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet" />
    <title>Location</title>
</head>

<body>

    <form action="" method="post">
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <a class="navbar-brand" href="#"><img src="../icons/navlogo.png" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                            <a class="nav-link" id="nav-button" href="#login">Login/Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row d-flex justify-content-around align-items-center">
            <div class="col-md-6 ">
                <img id="banner" src="../banners/map.png" alt="">
            </div>
            <div class="col-md-6" id="login-section">
                <div id="card-bg" class="card text-center">
                    <div class="card-header">


                        <img src="../icons/user.png" alt="" class="user"><br>
                        <label id="username" for="">Test Ahmed Khan</label><br>
                        <label id="address" for="">Dhaka,Bangladesh</label>
                    </div>

                    <div class="card-body">
                        <label id="label-location" for="">Location</label>
                        <div id="map">
                            <script src="../js/location.js"></script>
                            <script
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7LhjV6Wv82v1ioXeMnemjP_L0eCflJYk&callback=initMap"
                                async defer></script>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a id = "btn" href="http://localhost/web-tech-project/oapa-web/forms/selection.php">Done</a>
                    </div>
                </div>
            </div>

        </div>
    </form>
    <script src="../jquery/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>