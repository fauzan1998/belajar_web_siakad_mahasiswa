<?php
if(isset($_POST['UPDATE']))
{
	include 'koneksi.php';
    $id = $_POST['id'];
    $nim = $_POST['nim'];  
    $nama = $_POST['nama'];  
    $dg = $_POST['dg'];  
    $web = $_POST['web'];
	$appl = $_POST['appl'];
	$jarkom = $_POST['jarkom'];
	$statistika = $_POST['statistika'];  
    $basisdata =$_POST['basisdata'];
	
    $update = mysqli_query($koneksi,"UPDATE `db_rekap`.`db_mahasiswa` SET `dg` = '$dg', `web` = '$web', `appl` = '$appl', `jarkom` = '$jarkom', `statistika` = '$statistika', `basisdata` = '$basisdata' WHERE `db_mahasiswa`.`id` = '$id';");  
    if($update){  
        echo("  
            <script>alert('Nilai [ $nama ] berhasil di Update')</script>  
            <meta http-equiv=refresh content='0; url=viewnilai.php' >  
        ");  
    }else{  
        echo("  
            <script>alert('ERROR | Nilai gagal di update')</script>  
            <meta http-equiv=refresh content='0; url=editdata.php' >  
        ");   
    }
}
?>