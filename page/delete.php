<?php 
if(isset($_GET['id'])){	
include('koneksi.php'); 
$id = $_GET['id'];  
$nama=$_GET['nama'];  
$cek = mysqli_query($koneksi,"SELECT id FROM db_mahasiswa WHERE id='$id'") or die(mysqli_error());
if(mysqli_num_rows($cek) == 0)
	{
		echo '<script>window.history.back()</script>';
	}	
else
	{
		$del = mysqli_query($koneksi,"DELETE FROM `db_rekap`.`db_mahasiswa` WHERE `db_mahasiswa`.`id` = '$id'");
		if($del){  
		echo("  
			<script>alert('Data [$nama] berhasil dihapus')</script>  
			<meta http-equiv=refresh content='0; url=viewdata.php'>  
        ");
		}
		else {  
        echo("  
            <script>alert('ERROR | Data gagal di input')</script>  
            <meta http-equiv=refresh content='0; url=viewdata.php' >  
        ");
		}
	}
}
?>  