

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Open Library | Register</title>
</head>

<body>
  <!-- Awal Navbar -->
  <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="#"><img src="img/owl.png" alt="" width="60" height="60"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="home.php"><b>Home</b><span class="sr-only">(current)</span></a>
          <!--  <a class="nav-link" href="#catalog"><b>Catalog</b></a>
          <a class="nav-link" href="#news"><b>News</b></a>
          <a class="nav-link" href="#reservasi"><b>Room reservation</b></a>-->
        </div>
      </div>
      <div class="collapse navbar-collapse justify-content-end">

        <table style="width: 25%;">
          <form class="form-inline my-2 my-lg-0">
            <tr>
              <td>
                <a href="register.php"><button class="btn btn-outline-light" type="button">Registrasion</button></a>

              </td>
              <td>
                <a href="login.php"><button class="btn btn-outline-light" type="button">Login</button></a>
              </td>
            </tr>
          </form>
        </table>

      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->

  <?php

    session_start();

    require 'functions.php';
    ?>
    <?php
    if (isset($_POST["register1"])) {

        if (regis($_POST) > 0) {
    ?>
            <div class="alert alert-warning" role="alert">
                Berhasil Registrasi!!
            </div>

            <?php
                header("Location: login.php");
                exit;
            ?>

        <?php  } else { ?>
            <div class="alert alert-warning" role="alert">
                Gagal Registrasi!!
            </div>

            <?php
                header("Location: registrasi.php");
                exit;
            ?>

    <?php   }
    }  ?>

  <br>
  <br>
  <br>
  <!-- Container -->
  <div class="container">
    <div class="row">
      <div class="col-sm">
      </div>
      <div class="col-sm">

        <div class="col py-5 px-lg-12 border bg-danger shadow p-3 mb-5 bg-danger " style="border-radius: 15px;">
        <div>
              <center>
                <div class="col-sm-10 mt ">
                    <img src="img/owl.png" alt="" width="70" height="70">
                </div>
              </center>
            </div>
            <br>
          <h4 align="center">
            <font color="white">Registration</font>
          </h4>
          <br>

          <form action="" method="post">
            <div class="form-group">
              <label for="user" class="col-sm-5 col-form-label text-light" style="text-align: center;">Full Name</label>
              <div class="col-sm-12">
                <div class="col-12">
                  <input type="text" class="form-control shadow p-3" id="user" name="nama" style="border-radius: 10px;" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="user" class="col-sm-5 col-form-label text-light" style="text-align: center;">Username</label>
              <div class="col-sm-12">
                <div class="col-12">
                  <input type="text" class="form-control shadow p-3" id="user" name="username" style="border-radius: 10px;" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="user" class="col-sm-4  col-form-label text-light" style="text-align: center;">SID</label>
              <div class="col-sm-12">
                <div class="col-12  ">
                  <input type="text" class="form-control shadow p-3" id="user" name="sid" style="border-radius: 10px;" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="user" class="col-sm-4 col-form-label text-light" style="text-align: center;">Email</label>
              <div class="col-sm-12">
                <div class="col-12  ">
                  <input type="text" class="form-control shadow p-3" id="user" name="email" style="border-radius: 10px;" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="user" class="col-sm-5 col-form-label text-light" style="text-align: center;">Password</label>
              <div class="col-sm-12">
                <div class="col-12  ">
                  <input type="password" class="form-control shadow p-3" id="user" name="password" style="border-radius: 10px;" required>
                </div>
              </div>
            </div>
            
            <div>
              <center>
                <div class="col-sm-10 mt-5">
                  <button type="submit" class="btn btn-primary btn-block mt-5 justify-content-center shadow p-2 mb-0" data-toggle="modal" data-target="#exampleModal" style="border-radius: 20px;" name="register1">
                    Register
                  </button>
                </div>
              </center>
            </div>
            
          </form>

        </div>


      </div>
      <div class="col-sm">

      </div>
    </div>
  </div>
  <!-- Container -->
  <br>
  <br>
  <!-- Awal Footer -->
  <div class="container bg-danger shadow p-3 " style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
    <br>
    <h5 style="text-align: center;">
      <font color="white">Contact Me as Developer</font>
    </h5>
    <br>


    <center>
      <table style="width: 20% ; text-align: center;">
        <tr>
          <td>
            <a href="https://www.instagram.com/ardyrikardo/"><img src="img/instagram.png" alt="" width="50" height="50"></a>
          </td>
          <td>
            <a href="https://github.com/ardyrikardo"><img src="img/git.png" alt="" width="50" height="50"></a>
          </td>
          <td>
            <a href="https://www.linkedin.com/in/ardy-rikardo-1991a8144/"><img src="img/linkedin.png" alt="" width="50" height="50"> </a>
          </td>
        </tr>
      </table>
      <br>

      <div style="font-size: 12px;">
        <p>
          <font color="white">Copyright © 2020 - Ardy Rikardo</font>
        </p>
      </div>
    </center>
    <br>


  </div>
  <!-- Akhir Footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>