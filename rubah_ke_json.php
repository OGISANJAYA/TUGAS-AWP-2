    <?php 
	header("Access-Control-Allow-Origin: *");
    //Koneksi database MySQL
    $koneksi = mysqli_connect("mysql.idhostinger.com","u804638754_ogix","ogix1234","u804638754_idmhs") 
        or die("Error ".mysqli_error($koneksi));
    //Mengambil data pada table dari database MySQL
    $sql = "SELECT * FROM id_mhs";
    $result = mysqli_query($koneksi, $sql) 
        or die("Error in Selecting " . mysqli_error($koneksi));
    //Membuat array
    $id_mhs = array();
    while($row = mysqli_fetch_assoc($result))
    {
      $id_mhs[] = $row;
    }
    //Menampilkan konversi data pada tabel identitas ke format JSON
    echo json_encode($id_mhs);
	
    //close the db connection
    mysqli_close($koneksi);
    ?>
