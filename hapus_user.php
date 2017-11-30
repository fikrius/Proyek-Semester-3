<?php  
	require "functions.php";
	$id = $_GET['id_mhs'];

	if( delete($id) > 0 ){
		echo "
			<script>
				alert('Data berhasil dihapus');
				document.location.href = 'jumlah-user.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal dihapus');
				document.location.href = 'jumlah-user.php';
			</script>
		";
	}
?>