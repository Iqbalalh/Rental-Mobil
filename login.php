<?php
    
    session_start();

    if(isset($_SESSION['login'])){
      header("Location: admin.php");
      exit;
    }

    if(isset($_SESSION['member'])){
      header("Location: profile.php");
      exit;
    }

    require 'functions.php';

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
        $member = mysqli_query($conn, "SELECT * FROM member WHERE username = '$username'");

        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
                $_SESSION["login"] = true;
                echo("<script>window.location = 'admin.php';</script>");
                exit;
            }
        }

        elseif(mysqli_num_rows($member) === 1){
          $baris = mysqli_fetch_assoc($member);
          $idmember = $baris['id'];
          if ($password == $baris['password']){
              $_SESSION["member"] = true;
              echo("<script>window.location = 'profile.php';</script>");
              exit;
          }
        }

          $error = true;

        

    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KDV Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand" href="#">KDV Rent</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav nav-underline">
              <li class="nav-item">
                <a class="nav-link text-white" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="sewa.php">Rent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white active" href="login.php">Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  <div class="bg">
    <div class="color-overlay">
    <section>
      <div
        class="d-flex flex-column min-vh-100 justify-content-center"
      >
        <div class="container form-login">
          <div class="row" >
            <div class="col-sm-12 col-md-5 mt-5 mx-auto rounded shadow bg-black" style="opacity: 80%">
              <div class="row"> 

                <div class="col">
                    <div class="m-5 text-center">
                      <h1 style="color: white">
                        Selamat Datang!
                      </h1>
                    </div>

                    <?php if(isset($error)) : ?>
                      <center>
                      <p>username/password salah!</p>
                      </center>
                    <?php endif; ?>

                      <form class="m-5 mb-0" action="" method="post">

                          <div class="mb-3">
                            <label class="form-label" for="username" style="color: white">Username</label>
                            <input class="form-control" type="text" id="username" name="username"/>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="password" style="color: white">Password</label>
                              <input class="form-control" type="password" id="password" name="password"/>
                          </div>

                          <div class="mb-0">
                            <input type="submit" value="Login" class="form-control btn btn-primary mt-3" name="login"/>
                          </div>
                          
                      </form>

                      <div class="mx-5 mb-5">
                        <a type="button" class="form-control btn btn-primary mt-3 " href="register.php">
                          Register
                        </a>
                      </div>

                      </div>

                    </div>
                  
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </div>

    <script src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        var nav = document.querySelector('nav');
  
        window.addEventListener('scroll', function () {
          if (window.pageYOffset > 10) {
            nav.classList.add('bg-dark', 'shadow');
          } else {
            nav.classList.remove('bg-dark', 'shadow');
          }
        });
      </script>

  </body>
</html>
