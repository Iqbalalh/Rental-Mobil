<?php  
  
  session_start();

  if ( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
  }
  
  require 'functions.php';

  

  if( isset($_POST["submit"]) ){

    if( ubah($_POST) > 0 ){
      echo "
        <script>
          alert('Data Berhasil diubah');
          document.location.href = 'admin.php?';
        </script>
      ";
    }
    else {
      echo "
        <script>
          alert('Data gagal diubah');
          document.location.href = 'edit.php';
        </script>
      ";
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KDV Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tambah.css">
</head>
<body>
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
                        Edit
                      </h1>
                    </div>
<?php
  $id_mobil = $_GET['id_mobil'];
  if (isset($_GET['id_mobil'])) {
  $data = query("SELECT * FROM data_mobil WHERE id_mobil = '$id_mobil'");
?>
                      <form class="m-5 mb-0" action="" method="post" enctype="multipart/form-data">

                          <div class="mb-3">
                            <label class="form-label" for="nama_mobil" style="color: white">Nama Mobil</label>
                            <input class="form-control" type="text" id="nama_mobil" name="nama_mobil" required value="<?=$data[0]["nama_mobil"]; ?>"/>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="kategori" style="color: white">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control" required value="<?= $data[0]["kategori"]; ?>">
                              <option value="4 Seater">4 Seater</option>
                              <option value="6 Seater">6 Seater</option>
                              <option value="Kargo">Kargo</option>
                            </select>
                            <!-- <input class="form-control" type="text" id="kategori" name="kategori" required value="<?= $data[0]["kategori"]; ?>"/> -->
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="harga" style="color: white">Harga</label>
                            <input class="form-control" type="text" id="harga" name="harga" required value="<?= $data[0]["harga"]; ?>"/>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="rating" style="color: white">Rating</label>
                            <input class="form-control" type="text" id="rating" name="rating" required value="<?= $data[0]["rating"]; ?>"/>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="plat" style="color: white">Nomor Polisi</label>
                            <input class="form-control" type="text" id="plat" name="plat" required value="<?= $data[0]["plat"]; ?>"/>
                          </div>
                          
                          <div class="col-sm col-md">
                            <label class="form-label" for="fotomobil" style="color: white">Foto Mobil</label>
                            <input class="form-control" type="file" name="fotomobil" id="fotomobil"/>
                          </div>

                          <input class="form-control" type="hidden" name="oldphoto" value="<?=$data[0]['fotomobil'] ?>" required/>

                          <input class="form-control" type="hidden" name="id_mobil" value="<?=$data[0]['id_mobil'] ?>" required/>

                          <br>
                          <br>

                          <div class="mb-0">
                            <input type="submit" value="Submit" class="form-control btn btn-primary mt-3" name="submit"/>
                          </div>
                          <div class="mx-5 mb-5">

                          <div class="mx-5 mb-5">
                            <a type="button" class="form-control btn btn-primary mt-3 " href="admin.php">
                            Kembali
                            </a>
                          </div>

                      </div>
                          <?php } ?>
                      </form>



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
          if (window.pageYOffset > 50) {
            nav.classList.add('bg-dark', 'shadow');
          } else {
            nav.classList.remove('bg-dark', 'shadow');
          }
        });
      </script>
</body>
</html>