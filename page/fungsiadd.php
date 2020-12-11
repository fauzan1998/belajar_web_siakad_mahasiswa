<?php
if(isset($_POST['submit']))
{
	include "koneksi.php";
	$id = $_POST['id'];
    $nim = $_POST['nim'];  
    $nama = $_POST['nama'];  
    $ttl = $_POST['ttl'];  
    $alamat = $_POST['alamat'];
	$angkatan = $_POST['angkatan'];
	$jurusan = $_POST['jurusan'];
	$semester = $_POST['semester'];
      
	$link = mysqli_connect('localhost', 'root', '');
    $db_selected = mysqli_select_db($koneksi,'db_rekap');
    $add = mysqli_query($koneksi,"INSERT INTO `db_rekap`.`db_mahasiswa` (`id`, `nim`, `nama`, `ttl`, `alamat`, `angkatan`, `jurusan`, `semester`) VALUES ('', '$nim', '$nama', '$ttl', '$alamat', '$angkatan', '$jurusan', '$semester')");  
    if($add){  
        echo("  
            <script>alert('Data [ $nama ] berhasil ditambahkan')</script>  
            <meta http-equiv=refresh content='0; url=viewData.php' >  
        ");  
    }else{  
        echo("  
            <script>alert('ERROR | Data gagal di input')</script>  
            <meta http-equiv=refresh content='0; url=addData.php' >  
        ");   
    }  
}
?>