<?php  
	session_start();

	  if( !isset($_SESSION["login"]) ){
	    header("Location: masuk.php");
	    exit;
	  }
	
	require "controller/functions.php";
	$id = $_GET['id_bea'];

	if( delete_pendaftar_beasiswa($id) > 0 ){
		echo "
			<script>
				alert('Data berhasil dihapus');
				document.location.href = 'jumlah-pendaftar-beasiswa.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal dihapus');
				document.location.href = 'jumlah-pendaftar-beasiswa.php';
			</script>
		";
	}
?>