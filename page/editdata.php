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
            <a id="menuU" class="exit" href="logout.php"> Exit</a> 
        </div>  
		<div class="rightContent">
		<span>Edit Data Mahasiswa </span>  
<?php  
    $id = $_GET['id'];
	$show = mysqli_query($koneksi,"SELECT * FROM db_mahasiswa WHERE id='$id'");
	if(mysqli_num_rows($show) == 0)
		{   
		}
		else {
		    $ed = mysqli_fetch_assoc($show);   
		}
?>  
<form id="formAdd" method="post" action="fungsiedit.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table width="100%" border="0" cellspacing="0" cellpadding="5">  
  <tbody>
  <tr>
    <td>NIM</td>  
    <td>: <input type="text" name="nim" size="50" readonly value="<?php echo $ed['nim']; ?>" required></td>  
  </tr>  
  <tr>  
    <td>Nama</td>  
    <td>: <input type="text" name="nama" size="50" value="<?php echo $ed['nama']; ?>" required></td>  
  </tr>  
    <td>Tempat, Tanggal Lahir</td>  
    <td>: <input type="text" name="ttl" size="50" value="<?php echo $ed['ttl']; ?>" required></td>  
  </tr>
    <td>Alamat</td>  
    <td>: <input type="text" name="alamat" size="50" value="<?php echo $ed['alamat']; ?>" required></td>  
  </tr>
    <td>Angkatan</td>  
    <td>: <input type="text" name="angkatan" size="50" value="<?php echo $ed['angkatan']; ?>" required></td>  
  </tr>
  <tr>  
    <td>Jurusan</td>  
    <td>: <input type="text" name="jurusan" size="50" value="<?php echo $ed['jurusan'] ?>" required></td>  
  </tr>  
  <tr>  
    <td>Semester</td>  
    <td>: <input type="text" name="semester" size="50" value="<?php echo $ed['semester'] ?>" required></td>  
  </tr>  
  <tr>  
    <td colspan="2"><input type="submit" name="UPDATE" value="&radic; Update"> <input type="reset"></td>  
  </tr>  
  </tbody>    
</table>  
</form>    
	</div>
    </div>
    <div id="signFoot">&copy; 2019 Axquired <strong>Apps</strong></div>  
</body>  
</html>  