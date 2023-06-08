<?php
    session_start();

    if (!isset($_SESSION["login"]) ){
      header("Location: login.php");
      exit;
    }

    require_once 'functions.php';
    $sql = "SELECT * FROM data_mobil";
    $all_product = $conn->query($sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="bg">
  <div class="color-overlay">
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
          <a class="navbar-brand text-white" href="#">KDV Rent</a>
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
                <a class="nav-link text-white" href="tambah.php">Tambah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <br>
      <br>
      <br>


<section class="intro">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                <p></p>
                
                <p></p>
                  <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                      <tr>
                        <th scope="col"><center>ID Mobil</center></th>
                        <th scope="col"><center>Nama Mobil</center></th>
                        <th scope="col"><center>Kategori</center></th>
                        <th scope="col"><center>Harga</center></th>
                        <th scope="col"><center>Rating</center></th>
                        <th scope="col"><center>Plat</center></th>
                        <th scope="col"><center>Foto</center></th>
                        <th scope="col"><center>Action</center></th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                        while($row = mysqli_fetch_assoc($all_product)){
                    ?>
                      <tr>
                        <td><center><?php echo $row["id_mobil"]?></center></td>
                        <td><center><?php echo $row["nama_mobil"]?></center></td>
                        <td><center><?php echo $row["kategori"]?></center></td>
                        <td><center><?php echo $row["harga"]?></center></td>
                        <td><center><?php echo $row["rating"]?></center></td>
                        <td><center><?php echo $row["plat"]?></center></td>
                        <td><center><img src="car_image/<?= $row["fotomobil"]; ?>" class="card-img-top" alt="..." height="100px"></center></td>
                        <td><center><a href="edit.php?id_mobil=<?=$row['id_mobil'];?>"><button type="button" class="btn btn-primary">Edit</button></a> <a href="hapus.php?id_mobil=<?=$row['id_mobil'];?>"><button type="button" class="btn btn-dark">Hapus</button></a></center></td>
                      </tr>

                    <?php
                      }
                    ?>
      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</section>

<br>
<br>

</div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        var nav = document.querySelector('nav');
  
        window.addEventListener('scroll', function () {
          if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow');
          } else {
            nav.classList.remove('bg-dark', 'shadow');
          }
        });
      </script>
</body>
</html>