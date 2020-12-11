<?php include("koneksi.php"); // Link kan file koneksi.php tadi kesini?>  
<!DOCTYPE html>  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>TEKNOKRAT UNIVERSITY || Data Mahasiswa dan Nilai</title>  
<link href="defaultCSS.css" rel="stylesheet" type="text/css">  
<script type="text/javascript" src="jquery.js"></script>  
</head>  
  
<body>  
    <div id="headTop"><strong>TEKNOKRAT UNIVERSITY</strong> Data Mahasiswa dan Nilai</div>  
    <div id="contenMid">  
        <div class="leftMenu">  
            <span>MENU</span>  
            <a id="menuU" class="addData" href="adddata.php"> Tambah Data Mahasiswa</a>  
            <a id="menuU" class="viewData" href="viewdata.php"> Daftar Mahasiswa</a>  
            <a id="menuU" class="editData" href="viewnilai.php"> Daftar Nilai Mahasiswa</a>
            <a id="menuU" class="contact" href="contactus.php"> Contact US</a>  
            <a id="menuU" class="exit" href="logout.php"> Exit</a> 
        </div>  
		<div class="rightContent">
		<span>Form Tambah Data Mahasiswa</span>
		<form id="formAdd" action="fungsiadd.php"method="post">
		<input type="hidden" name="id" placeholder="ID AKAN TERISI OTOMATIS" size="50" readonly="readonly">  
		<table width="100%" border="0" cellspacing="0" cellpadding="5">   
		<tbody>  
			<tr>  
				<td>NIM</td>  
				<td>: <input type="text" name="nim" placeholder="NIM" size="50" required></td>  
			</tr>  
			<tr>  
				<td>Nama</td>  
				<td>: <input type="text" name="nama" placeholder="Nama Mahasiswa" size="50" required></td>  
			</tr>  
			<tr>  
				<td>Tempat, Tanggal Lahir</td>  
				<td>: <input type="text" name="ttl" placeholder="Tempat, Tanggal Lahir" size="50" required></td>  
			</tr>  
			<tr>  
				<td>Alamat</td>  
				<td>: <input type="text" name="alamat" placeholder="Alamat" size="50" required></td>  
			</tr>
			<tr>  
				<td>Angkatan</td>  
				<td>: <input type="text" name="angkatan" placeholder="Angkatan" size="50" required></td>  
			</tr>  
			<tr>  
				<td>Jurusan</td>  
				<td>: <input type="text" name="jurusan" placeholder="Jurusan" size="50" required></td>  
			</tr>  
			<tr>  
				<td>Semester</td>  
				<td>: <input type="text" name="semester" placeholder="semester" size="50" required></td>  
			</tr> 
			<tr>  
				<td colspan="2"><input type="submit" name="submit"value="submit"><input type="reset"></td>  
			</tr>  
		</tbody>    
		</table>  
		</form>
		</div>
    </div>
    <div id="signFoot">&copy; 2019 Axquired <strong>Apps</strong></div>  
</body>  
</html>  