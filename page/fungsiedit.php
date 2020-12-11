<?php
if(isset($_POST['UPDATE']))
{
	include 'koneksi.php';
	$id = $_POST['id'];	
    $nim = $_POST['nim'];  
    $nama = $_POST['nama'];  
    $ttl = $_POST['ttl'];  
    $alamat = $_POST['alamat'];
	$angkatan = $_POST['angkatan'];
	$jurusan = $_POST['jurusan'];
	$semester = $_POST['semester'];
    
	//$dat = mysql_fetch_array("SELECT * FROM db_mahasiswa ORDER BY nim ASC");
    $update = mysqli_query($koneksi,"UPDATE db_mahasiswa SET nim='$nim', nama='$nama', ttl='$ttl', alamat='$alamat', angkatan='$angkatan', jurusan='$jurusan', semester='$semester' WHERE id='$id'");  
    if($update){  
        echo("  
            <script>alert('Data [ $nama ] berhasil di Update')</script>  
            <meta http-equiv=refresh content='0; url=viewdata.php' >  
        ");  
    }else{  
        echo("  
            <script>alert('ERROR | Data gagal di update')</script>  
            <meta http-equiv=refresh content='0; url=editdata.php?id='$id'' >  
        ");   
    }  
}
?>