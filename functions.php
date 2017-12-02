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

	function create($query){
		global $conn;
		$q = $conn -> query($query);
		if($q === TRUE){
			echo "";
		}else{
			echo "";
		}
		$conn -> close();
	}

	function create_tabel($query){
		global $conn;
		$q = $conn -> query($query);
		if($conn -> connect_error){
			die("Tabel gagal : ".connect_error."<br>");
		}
		echo "Tabel sukses <br>";
		$conn -> close();
	}

	function insert($data){
		global $conn;

		$nama = htmlspecialchars($data['nama']);
		$nim = htmlspecialchars($data['nim']);
		$password = htmlspecialchars($data['password']);
		$konfirmasi_password = htmlspecialchars($data['konfirmasi_password']);
		$tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
		$jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);

		$sql = "INSERT INTO akun VALUES(
				'', '$nama', '$nim', '$password', '$konfirmasi_password', '$tanggal_lahir', '$jenis_kelamin'
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

		$conn -> close();
	}

	function ubah($data){
		global $conn;

		$id = $data['id'];
		$nama = htmlspecialchars($data['nama']);
		$nim = htmlspecialchars($data['nim']);
		$password = htmlspecialchars($data['password']);
		$konfirmasi_password = htmlspecialchars($data['konfirmasi_password']);
		$tanggal_lahir = htmlspecialchars($data['tanggal-lahir']);
		$jenis_kelamin = htmlspecialchars($data['jenis-kelamin']);

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

		//cek konfirmasi password
		if( $password !== $konfirmasi_password ){
			echo "<script>
					alert('Konfirmasi password tidak sesuai!');
				</script>";
			return false;
		}
		
		//enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);
		$konfirmasi_password = $password;

		//tambahkan user baru ke database
		$sql = "INSERT INTO akun VALUES('', '$nama', '$nim', '$password', '$konfirmasi_password', '$tanggal_lahir', '$jenis_kelamin')";
		mysqli_query($conn, $sql);
		return mysqli_affected_rows($conn);
	}

?>
