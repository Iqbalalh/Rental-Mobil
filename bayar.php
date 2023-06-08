<?php
    session_start();

    if (!isset($_SESSION["member"]) ){
        echo "
            <script>
              alert('Silahkan Login terlebih dahulu');
              document.location.href = 'login.php';
            </script>
          ";
      
    }

    require_once 'functions.php';
    $sql = "SELECT * FROM data_mobil";
    $all_product = $conn->query($sql);

    if(isset($_POST["submit"]) ){
        echo "
            <script>
              alert('Pembayaran Berhasil');
              document.location.href = 'sewa.php';
            </script>
          ";
      }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KDV Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bayar.css">
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
                <a class="nav-link text-white active" href="sewa.php">Rent</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="about.php">About</a>
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
                      <h1 style="color: white">
                        Silahkan Selesaikan Pembayaran!
                      </h1>
                    </div>

                    <?php
                        $id_mobil = $_GET['id_mobil'];
                        if (isset($_GET['id_mobil'])) {
                        $data = query("SELECT * FROM data_mobil WHERE id_mobil = '$id_mobil'");
                    ?>

                      <form class="m-5 mb-0" action="" method="post">

                          <div class="mb-3">
                            <label class="form-label" for="nama_mobil" style="color: white">Mobil</label>
                            <input class="form-control" type="button" id="nama_mobil" name="nama_mobil" value="<?=$data[0]["nama_mobil"]; ?>"/>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="kategori" style="color: white">Kategori</label>
                              <input class="form-control" type="button" id="kategori" name="kategori" value="<?=$data[0]["kategori"]; ?>"/>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="harga" style="color: white">Harga</label>
                              <input class="form-control" type="button" id="harga" name="harga" value="<?=$data[0]["harga"]; ?>"/>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="metode_pembayaran" style="color: white">Metode Pembayran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
                              <option value="GoPay">GoPay</option>
                              <option value="BCA">BCA</option>
                              <option value="Mandiri">Mandiri</option>
                              <option value="Shopee Pay">Shopee Pay</option>
                            </select>
                          </div>

                          <div class="mb-5">
                            <input type="submit" value="Bayar" class="form-control btn btn-primary mt-3" name="submit"/>
                          </div>
                          
                      </form>

                      <?php } ?>

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