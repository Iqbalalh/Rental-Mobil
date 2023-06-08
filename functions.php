<?php 
	
	$conn = mysqli_connect("localhost", "root", "", "rental_mobil");

	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data){
		global $conn;

		$id_mobil = htmlspecialchars($data["id_mobil"]);
		$nama_mobil = htmlspecialchars($data["nama_mobil"]);
		$kategori = htmlspecialchars($data["kategori"]);
		$harga = htmlspecialchars($data["harga"]);
		$rating = htmlspecialchars($data["rating"]);
		$plat = htmlspecialchars($data["plat"]);
		$fotomobil = upload();
		if (!$fotomobil){
			return false;
		}
		
		$query = "INSERT INTO data_mobil VALUES (NULL, '$nama_mobil', '$kategori', '$harga', '$rating', '$plat', '$fotomobil')";


	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

	}

	function upload(){

		$namaFile = $_FILES['fotomobil']['name'];
		$ukuranFile = $_FILES['fotomobil']['size'];
		$error = $_FILES['fotomobil']['error'];
		$tmpName = $_FILES['fotomobil']['tmp_name'];

		if ( $error === 4 ){
			echo "
				<script>
					alert('Pilih gambar terlebih dahulu!');
				</script>
			";
			return false;
		}

		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
			echo "
				<script>
					alert('Yang anda upload bukan gambar');
				</script>
			";
			return false;
		}

		if ( $ukuranFile > 2000000 ){
			echo "
				<script>
					alert('Ukuran gambar terlalu besar');
				</script>
			";
			return false;
		}

		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;

		move_uploaded_file($tmpName, 'car_image/' . $namaFileBaru);

		return $namaFileBaru;

	}

	function hapus($id_mobil){

		global $conn;
		$pilih = mysqli_query($conn, "SELECT * FROM data_mobil WHERE id_mobil = '$id_mobil'");
    	$data = mysqli_fetch_array($pilih);
    	$foto = $data['fotomobil'];
    	unlink("car_image/$foto");
		mysqli_query($conn, "DELETE FROM data_mobil WHERE id_mobil = '$id_mobil'");

		return mysqli_affected_rows($conn);
	}

	function ubah($data){
		global $conn;
		var_dump($data);
		$id_mobil = htmlspecialchars($data["id_mobil"]);
		$nama_mobil = htmlspecialchars($data["nama_mobil"]);
		$kategori = htmlspecialchars($data["kategori"]);
		$harga = htmlspecialchars($data["harga"]);
		$rating = htmlspecialchars($data["rating"]);
		$plat = htmlspecialchars($data["plat"]);
		$oldphoto = htmlspecialchars($data["oldphoto"]);		
		if ($_FILES['fotomobil']['name'] != null){
			unlink("car_image/$oldphoto");
		    $fotomobil = upload();
		    
		}
		
		else{
			$fotomobil = $oldphoto;
		}

		$query = "UPDATE data_mobil SET
		nama_mobil = '$nama_mobil',
		kategori = '$kategori',
		harga = '$harga',
		rating = '$rating',
		plat = '$plat',
		fotomobil = '$fotomobil'
		WHERE id_mobil = '$id_mobil' ";

		mysqli_query($conn, $query);
    	return mysqli_affected_rows($conn);
	}

	function register($member) {
		global $conn;

		$id = htmlspecialchars($member["id"]);
		$username = htmlspecialchars($member["username"]);
		$password = mysqli_real_escape_string($conn, $member["password"]);
		$nama = htmlspecialchars($member["nama"]);
		// $password = password_hash($password, PASSWORD_DEFAULT);
		
		$query = "INSERT INTO member VALUES (NULL, '$username', '$password', '$nama')";


	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
	}

?>