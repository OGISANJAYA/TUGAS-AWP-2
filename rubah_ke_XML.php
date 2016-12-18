<?php Header('Content-type: text/xml');
header("Access-Control-Allow-Origin: *"); 
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<xml>
<?php
 $koneksi = mysqli_connect("mysql.idhostinger.com","u804638754_ogix","ogix1234","u804638754_idmhs") 
        or die("Error ".mysqli_error($koneksi));
//Mengambil data pada table dari database MySQL
    $sql = "SELECT * FROM id_mhs";
    $result = mysqli_query($koneksi, $sql) 
        or die("Error in Selecting " . mysqli_error($koneksi));
    //Membuat array
    $user_login = array();
    while($row = mysqli_fetch_assoc($result))
    {
?>
	<id_mhs>
	  <nama><?php echo $row['nama']; ?></nama>
	  <ttl><?php echo $row['ttl']; ?></ttl>
	  <nim><?php echo $row['nim']; ?></nim>
	  <angkatan><?php echo $row['angkatan']; ?></angkatan>
	  <jurusan><?php echo $row['jurusan']; ?></jurusan>
	  <alamat><?php echo $row['alamat']; ?></alamat>
	</id_mhs>
<?php
    }
?>
</xml>
