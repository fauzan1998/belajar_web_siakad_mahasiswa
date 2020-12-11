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
		<table>
		<thead> <marquee> <h2>Selamat datang di Website TEKNOKRAT University || Website Data Mahasiswa dan Rekap Nilai Mahasiswa</h2></marquee>
		</thead></table>
		</div>
    </div>  
    <div id="signFoot">&copy; 2020 Axquired <strong>Apps</strong></div>  
</body>  
</html>  