<?php
    require_once 'functions.php';
    $sql = "SELECT * FROM data_mobil";
    $all_product = $conn->query($sql)
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KDV Rent</title>
    <link rel="stylesheet" href="css/sewa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

  <div class="bg">
      <div class="color-overlay">
    
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
                <a class="nav-link text-white active" href="sewa.php">Rent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="profile.php">Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <br>
      <br>
      <br>

      
        <main class="mt-5">
          <center>
            <div class="container">
                <div class="row">
                    <?php
                        while($row = mysqli_fetch_assoc($all_product)){
                    ?>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                          <a href="bayar.php?id_mobil=<?=$row['id_mobil'];?>">
                              <img src="car_image/<?= $row["fotomobil"]; ?>" class="card-img-top" alt="...">
                              <div class="insight">
                                <h5 class="merk"><?php echo $row["nama_mobil"] ?> (<?php echo $row["kategori"] ?>)</h5>
                              </div>
                              <div class="card-body">
                                  <p class="m-0">Harga/hari: Rp<?php echo $row["harga"]?></p>
                                  <p class="m-0">Rating : <?php echo $row["rating"]?></p>
                                  <p class="m-0">No. Pol : <?php echo $row["plat"]?></p>
                              </div>
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            </center>
        </main>

        </div>
      </div>



      <script src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        var nav = document.querySelector('nav');
  
        window.addEventListener('scroll', function () {
          if (window.pageYOffset > 0) {
            nav.classList.add('bg-dark', 'shadow');
          } else {
            nav.classList.remove('bg-dark', 'shadow');
          }
        });
      </script>

  </body>
</html>