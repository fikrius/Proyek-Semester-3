<?php  
	require "functions.php";
	$id = $_GET['id_kontak'];

	if( delete_kontak($id) > 0 ){
		echo "
			<script>
				alert('Data berhasil dihapus');
				document.location.href = 'feedback.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal dihapus');
				document.location.href = 'feedback.php';
			</script>
		";
	}
?>