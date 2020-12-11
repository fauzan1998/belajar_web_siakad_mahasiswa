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
		<span>Daftar Nama Mahasiswa</span>  
<?php echo("  
    <table width='100%' border='0' cellspacing='0' cellpadding='4'>  
      <thead>  
        <th>No.</th>  
        <th>NIM</th>  
        <th>Nama</th>  
        <th>Tempat, Tanggal Lahir</th>  
        <th>Alamat</th>
		<th>Angkatan</th>
		<th>Jurusan</th>
		<th>Semester</th>
        <th>Pilihan</th>  
      </thead>  
      <tbody>  
      ");  
      $q = mysqli_query($koneksi,"SELECT * FROM db_mahasiswa ORDER BY nim ASC");  
      $num = 1;  
      while ($dat = mysqli_fetch_array($q)){  
      echo("                    
      <tr>  
        <td align=center>".$num++."</td>  
        <td align=center>$dat[nim]</td>  
        <td align=center>$dat[nama]</td>  
        <td align=center>$dat[ttl]</td>  
        <td align=center>$dat[alamat]</td>
		<td align=center>$dat[angkatan]</td>
		<td align=center>$dat[jurusan]</td>
		<td align=center>$dat[semester]</td> 
        <td align=center>
			<a href=editdata.php?id=$dat[id]><button>Edit</button></a>
			<a href=delete.php?id=$dat[id]&nama=$dat[nama]><button>Hapus</button></a>
		</td>  
      </tr>  
      ");  
      }  
      echo("   
      </tbody>  
    </table>              
"); ?>  
		</div>
    </div>
    <div id="signFoot">&copy; 2019 Axquired <strong>Apps</strong></div>  
</body>  
</html>  