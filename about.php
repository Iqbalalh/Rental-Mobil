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
                <a class="nav-link text-white active" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="login.php">Profile</a>
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
                      <h4 style="color: white">
                        Tentang Pengembang
                      </h4>
                      <br>
                      <br>
                      <br>
                      <img src="img/bocchi.jpeg" alt="" style="border-radius: 100%;">
                      <br>
                      <br>
                      <h2>Kelompok 3</h2>
                    </div>

                    <div class="col mx-5 mb-5">
                      <center>
                          <a href="https://instagram.com/iqbal.alhafidzu?igshid=ZDdkNTZiNTM="><img src="img/ig.png" alt="" href></a>
                          <a href="https://wa.me/qr/NJZONJ25IU5CB1"><img src="img/wa.png" alt=""></a>
                          <a href="https://github.com/Iqbalalh"><img src="img/github.png" width="80px" alt=""></a>
                      </center>
                    
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