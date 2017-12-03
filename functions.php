<?php
	//KONEKSI KE SERVER  
	$conn = mysqli_connect("localhost", "root", "", "beasiswa");
	if($conn -> connect_error){
		die("Koneksi gagal : ".connect_error. "<br>");
	}
	echo "";

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = []; //menyiapkan wadah
		while( $row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}
		return $rows;
	}

	function insert($data){
		global $conn;

		$nama = htmlspecialchars($data['nama']);
		$nim = htmlspecialchars($data['nim']);
		$password = htmlspecialchars($data['password']);
		$tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
		$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);

		$sql = "INSERT INTO akun VALUES(
				'', '$nama', '$nim', '$password', '$tanggal_lahir', '$jenis_kelamin'
			)";

		mysqli_query($conn, $sql);
		return mysqli_affected_rows($conn);
		$conn -> close();
	}

	function delete($id){
		global $conn;
		$sql = "DELETE FROM akun WHERE id_mhs=$id";
		mysqli_query($conn, $sql);
		return mysqli_affected_rows($conn);

	}

	function ubah($data){
		global $conn;

		$id = $data['id'];
		$nama = htmlspecialchars($data['nama']);
		$nim = htmlspecialchars($data['nim']);
		$tanggal_lahir = $data['tanggal_lahir'];
		$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);

		$sql = "UPDATE akun SET 
				nama = '$nama',
				nim = '$nim',
				tanggal_lahir = '$tanggal_lahir',
				jenis_kelamin = '$jenis_kelamin'
				WHERE id_mhs = $id
				";

		mysqli_query($conn, $sql);
		return mysqli_affected_rows($conn);
	}

	function daftar($data){
		global $conn;
		
		$nama = htmlspecialchars(stripslashes($data['nama']));
		$nim = htmlspecialchars(stripslashes($data['nim']));
		$password = mysqli_real_escape_string($conn, $data['password']);
		$konfirmasi_password = mysqli_real_escape_string($conn, $data['konfirmasi']);
		$tanggal_lahir = $data['tanggal_lahir'];
		$jenis_kelamin = $data['jenis_kelamin'];

		//cek apakah nim sudah terdaftar atau belum
	    $sql2 = "SELECT * FROM akun WHERE nim='$nim'";
	    $result = mysqli_query($conn, $sql2);
	    if( mysqli_num_rows($result) === 1 ){
	      $row = mysqli_fetch_assoc($result);
	      if( $row ){
	        echo "<script>
	                alert('NIM yang Anda masukkan sudah terdaftar!');
	                document.location.href = 'daftar.php';
	              </script>";
	        
	      }
	      return false;
	    }

		//cek konfirmasi password
		if( $password !== $konfirmasi_password ){
			echo "<script>
					alert('Konfirmasi password tidak sesuai!');
				</script>";
			return false;
		}
		//enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);
		
		
		//tambahkan user baru ke database
		$sql = "INSERT INTO akun VALUES('', '$nama', '$nim', '$password', '$tanggal_lahir', '$jenis_kelamin')";
		mysqli_query($conn, $sql);
		return mysqli_affected_rows($conn);
	}

?>
