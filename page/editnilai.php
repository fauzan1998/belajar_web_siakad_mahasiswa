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
            <a id="menuU" class="editData" href="viewnilai.php"> Edit Data Mahasiswa</a>  
            <a id="menuU" class="exit" href="logout.php"> Exit</a> 
        </div>  
		<div class="rightContent">
		<span>Edit Nilai Mahasiswa </span>  
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
<form id="formAdd" method="post" action="fungsinilai.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">  
<table width="100%" border="0" cellspacing="0" cellpadding="5">  
  <tbody>    
  <tr>  
    <td>NIM</td>  
    <td>: <input type="text" name="nim" size="50" readonly value="<?php echo $ed['nim']; ?>" required></td>  
  </tr>  
  <tr>  
    <td>Nama</td>  
    <td>: <input type="text" name="nama" size="50" readonly value="<?php echo $ed['nama']; ?>" required></td>  
  </tr>  
    <td>Design Grafis</td>  
    <td>: <input type="text" name="dg" size="50" placeholder="Masukkan Angka 1-100" value="<?php echo $ed['dg']; ?>" required></td>  
  </tr>
    <td>Pemograman Web</td>  
    <td>: <input type="text" name="web" size="50" placeholder="Masukkan Angka 1-100" value="<?php echo $ed['web']; ?>" required></td>  
  </tr>
    <td>Analisis Perancangan Perangkat lunak</td>  
    <td>: <input type="text" name="appl" size="50" placeholder="Masukkan Angka 1-100" value="<?php echo $ed['appl']; ?>" required></td>  
  </tr>
  <tr>  
    <td>Jaringan Komputer</td>  
    <td>: <input type="text" name="jarkom" size="50" placeholder="Masukkan Angka 1-100" value="<?php echo $ed['jarkom'] ?>" required></td>  
  </tr>  
  <tr>  
    <td>Statistika</td>  
    <td>: <input type="text" name="statistika" size="50" placeholder="Masukkan Angka 1-100" value="<?php echo $ed['statistika'] ?>" required></td>  
  </tr>  
  <tr>  
    <td>Pemograman Basis Data</td>  
    <td>: <input type="text" name="basisdata" size="50" placeholder="Masukkan Angka 1-100" value="<?php echo $ed['basisdata'] ?>" required></td>  
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