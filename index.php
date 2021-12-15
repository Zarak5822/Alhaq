<?php
require 'connection.php';
?>
<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alhaq Scholar Academy</title>
  <link href="css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.min.css" rel="stylesheet">
  <link href="css/hover-min.css" rel="stylesheet">
  <link href="css/imagehover.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!-- <link href="css/scroll_design.css" rel="stylesheet"> -->



  <style>



  </style>
</head>

<body style=" font-family: Urdu Nastaliq Unicode" ;>
  <header>
    <div class="row">
      <div class="col-md-12">

        <nav>
          <div class="navbar navbar-expand-md bg-primary navbar-dark ">
            <a class="navbar-brand" href="#">الحق اسکالرز اکیڈمی</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Dars e Nizami
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Darja Al-aula(1st Year) درجہ اولی</a>
                    <a class="dropdown-item" href="#">Darja Al Sania (2nd Year) درجہ ثانیہ</a>
                    <a class="dropdown-item" href="#">Darja Al Salesa (3rd Year) درجہ ثالثہ</a>
                    <a class="dropdown-item" href="#">Darja Al Rabia (4th Year) درجہ رابعہ</a>
                    <a class="dropdown-item" href="#">Darja Dora e Hadith (5th Year) دورہ حدیث</a>
                    <a class="dropdown-item" href="#">DarjaTakhassus-Fil-Fiqh (6th year)دارجہ تخصص فی فقہ </a>


                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Books</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Fatwajat
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="Online-Fatwa.php">Online Fatwa &nbsp;&nbsp;&nbsp;آن لائن فتویٰ</a>
                    <a class="dropdown-item" href="Fatwa.php">Fatwas &nbsp;&nbsp;&nbsp;فتویٰ</a>

                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Literature</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Media</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="zakat-calculator.php">Zakat Calculator</a>
                </li>
              </ul>
            </div>
        </nav>
      </div>
    </div>
    </div>

  </header>
  <div class="row">
    <div class="col-md-12">
      <div style=" background-color:#333;">
        <marquee direction="right"><img src="images/khutba_desktop.png" class="img-responsive"></marquee>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-md-9">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./images/Slider/slide.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./images/Slider/slide1.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./images/Slider/slide3.jpg" alt="Third slide">
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
        </div>
        <div class="col-md-3 pr-2">
          <div class=" Announcmnt"><b>A</b>nnouncements</div>
          <hr>
          <?php

          $qry = "SELECT * FROM announcement";
          $result = $con->query($qry);
          while ($row = $result->fetch_assoc()) {
            $name1 = $row["announcements"];

          ?>
            <p>* <?php echo $name1; ?> </p>
          <?php
          }
          ?>

        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mt-5 mb-5">

      <div class="row">
        <div class="col-md-4">
          <h3 class="ayat-of-day mb-5">Ayat of the Day</h3>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/Ayat/Ayat 1.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Publisher:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <h3 class="hadees-of-day mb-5">Hadees of the Day</h3>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/Hadees/hadees.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Publisher:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <h3 class="fatwa-of-day mb-5">Fatwa of the Day</h3>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/fatwa/fatwa1.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Publisher:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container mt-5 mb-5">

      <div class="row">
        <div class="col-md-4">
          <h3 class="events mb-5">Events & Updates</h3>
          <div class="card" style="width: 18rem;">
            <div class="card-body">

              <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                </div>
              </div>

            </div>
          </div>

        </div>
        <div class="col-md-4">
          <h3 class="department mb-5">Departments</h3>
          <div class="card" style="width: 18rem;">

            <div class="card-body">

              <p class="card-text">*</p>
              <p class="card-text">*</p>

            </div>
          </div>

        </div>

      </div>
    </div>
  </section>
  <section>
    <div class="container mt-5 mb-5">
      <div class="row">
      <h3 class="books mb-5">Books Collection</h3>
      </div>
        <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/Ayat/Ayat 1.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Name:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/Hadees/hadees.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Publisher:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/fatwa/fatwa1.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Publisher:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/Ayat/Ayat 1.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Name:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/Hadees/hadees.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Publisher:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/fatwa/fatwa1.jpg" alt="Card image cap">
            <div class="card-body">
              <!-- <h5 class="card-title">Card title</h5> -->
              <p class="card-text">Date:</p>
              <p class="card-text">Publisher:</p>
              <!-- <p class="card-text">:</p> -->
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/sscrol.js"></script>

</html>