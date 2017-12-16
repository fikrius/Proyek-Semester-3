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

	function delete_pendaftar_beasiswa($id){
		global $conn;
		$sql = "DELETE FROM bea WHERE id_bea=$id";
		mysqli_query($conn, $sql);
		return mysqli_affected_rows($conn);
	}

	function delete_kontak($id){
		global $conn;
		$sql = "DELETE FROM kontak WHERE id_kontak=$id";
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

	function ubah_pendaftar_beasiswa($data){
		global $conn;

		$id = $data['id'];
		$nama = $data['nama'];
		$nim = $data['nim'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$gaji = htmlspecialchars($data['gaji']);
		$saudara = htmlspecialchars($data['saudara']);
		$jurusan = $data['jurusan'];
		$ipk = htmlspecialchars($data['ipk']);

		$sql = "UPDATE bea SET 
				nama = '$nama',
				nim = '$nim',
				tanggal_lahir = '$tanggal_lahir',
				jenis_kelamin = '$jenis_kelamin',
				gaji = '$gaji',
				saudara = '$saudara',
				jurusan = '$jurusan',
				ipk = '$ipk'
				WHERE id_bea = $id
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

	function daftar_beasiswa($data){
		global $conn;

		$nama = $data['nama'];
		$nim = $data['nim'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$jenis_kelamin = $data['jenis_kelamin'];
		$gaji = htmlspecialchars($data['gaji']);
		$saudara = htmlspecialchars($data['saudara']);
		$jurusan = $data['jurusan'];
		$semester = htmlspecialchars($data['semester']);
		$ipk = htmlspecialchars($data['ipk']);
		$tunjangan = $gaji/$saudara;

		// cek apakah nim sudah terdaftar atau belum
	    $sql2 = "SELECT * FROM bea WHERE nim='$nim'";
	    $result = mysqli_query($conn, $sql2);
	    if( mysqli_num_rows($result) === 1 ){
	      $row = mysqli_fetch_assoc($result);
	      if( $row ){
	        echo "<script>
	                alert('NIM yang Anda masukkan sudah terdaftar!');
	                document.location.href = 'home-mahasiswa.php';
	              </script>";
	        
	      }
	      return false;
	    }

	    //tambahkan user baru ke database
	    // $fk_id_mhs = "SELECT id_mhs FROM akun WHERE nama='$nama'";
		// $sql = "INSERT INTO bea VALUES('', '$nama', '$nim', '$tanggal_lahir', '$jenis_kelamin', '$gaji', '$saudara', '$jurusan', '$semester', '$ipk', '')";
		$sql = "INSERT INTO bea 
   				SET nama = '$nama',
   				nim = '$nim',
   				tanggal_lahir = '$tanggal_lahir',
   				jenis_kelamin = '$jenis_kelamin',
   				gaji = '$gaji',
   				saudara = '$saudara',
   				jurusan = '$jurusan',
   				semester = '$semester',
   				ipk = '$ipk',
   				tunjangan = '$tunjangan',
		       fk_id_mhs = (
			       SELECT id_mhs
			         FROM akun
			        WHERE nama = '$nama')";
		mysqli_query($conn, $sql);
		// $fk_id_mhs = "INSERT INTO bea(fk_id_mhs) VALUES(SELECT id_mhs FROM akun WHERE nama='$nama')";
		// mysqli_query($conn, $fk_id_mhs);
		return mysqli_affected_rows($conn);
		$conn -> close();

	}

	function kontak($data){
		global $conn;

		$nama = htmlspecialchars($data['nama']);
		$email = htmlspecialchars($data['email']);
		$pesan = htmlspecialchars($data['pesan']);

		$sql = "INSERT INTO kontak VALUES(
				'', '$nama', '$email', '$pesan'
			)";

		mysqli_query($conn, $sql);
		return mysqli_affected_rows($conn);
		$conn -> close();
	}

	function hitung_user(){
		global $conn;
	 	 $sql = "SELECT * FROM akun";
	 	 $query = mysqli_query($conn, $sql);
	 	 $count = mysqli_num_rows($query);

	 	 return $count;
	}

	function hitung_pendaftar_beasiswa(){
		global $conn;
	 	 $sql = "SELECT * FROM bea";
	 	 $query = mysqli_query($conn, $sql);
	 	 $count = mysqli_num_rows($query);

	 	 return $count;
	}

	function hitung_feedback(){
		global $conn;
	 	 $sql = "SELECT * FROM kontak";
	 	 $query = mysqli_query($conn, $sql);
	 	 $count = mysqli_num_rows($query);

	 	 return $count;
	}

?>
