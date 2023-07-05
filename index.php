<style> 
textarea {
  width: 100%;
  height: 350px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  margin: 10px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
    wrap: off;
  overflow-wrap: normal;
  overflow-x: scroll;
}
.notice {
    background-color: #ffd700;
    padding: 5px;
    border: 1px solid #000;
  width: 100%;
    margin: 0 auto;
    text-align: left;
}

.notice h2 {
    color: #000;
    font-size: 24px;
        white-space: nowrap;
            overflow: hidden;
    text-overflow: ellipsis;
}

.notice p {
    color: #000;
    font-size: 16px;
        white-space: nowrap;
            overflow: hidden;
    text-overflow: ellipsis;
}

</style>
<?php
// Koneksi ke database MySQL
include_once 'conn.php';

function tgltodb($date){
    $date = str_replace('/', '-', $date); 
$show_date = date('Y-m-d', strtotime($date));
return $show_date;
}
//$file_name = 'data.txt';
// Cek apakah file sudah dipilih
if (isset($_FILES['file'])) {
$file_set=fopen($_FILES['file']['tmp_name'], "r");
// $file_stat=fstat($file_set);
$namefile=$_FILES['file']['name'];
$realpath =realpath($_FILES['file']['tmp_name']);
$created_timestamp = filemtime($realpath);
    $created_date = date("Y-m-d H:i:s", $created_timestamp);
    echo "<div class='notice'>
        <h2>Notice : File $namefile dibuat pada tanggal: $created_date.</h2>
    </div>";
    // echo "File $namefile dibuat pada tanggal: $created_date";
// Lakukan operasi dengan file yang dipilih
// var_dump($file_stat);
} else {
 echo "<div class='notice'>
        <h2>Notice : File Belum Dipilih.</h2>
    </div>";
}

// Buat form untuk memilih file
echo '<form method="post" enctype="multipart/form-data">';
echo '<input type="file" name="file" required>';
echo '<input type="submit" value="Import">';
echo '</form>';
 echo '<textarea>';

// Membaca file .txt
//$file_exist = file_exists($file_name);
if (isset($file_set) == false) {
     echo "Terjadi kesalahan saat membuka file ".isset($file_name) ;
 die();
}
$file = fopen("data.txt", "r");

$counter = 0;
while(!feof($file)) {
    $line = fgets($file);
    $line = trim($line);
//menggunakan variabel $counter sebagai penanda. baris pertama akan dilewati dengan menggunakan pernyataan continue ketika $counter masih 0. Setelah itu, $counter akan ditingkatkan menjadi 1  
      if (!empty($line)) {
        if ($counter == 0) {
            $counter++;
            continue;
        }

    if (!empty($line)) {
    $data = explode(",", $line);

    // Mengambil nilai dari array $data
    $tanggal_scan = $data[0] ?? "";
    $tanggal = $data[1] ?? "";
    $jam = $data[2] ?? "";
    $pin = $data[3] ?? "";
    $nip = $data[4] ?? "";
    $nama = $data[5] ?? "";
    // $nama = ""; // Mengabaikan kolom 'nama' dari array $data
    $jabatan = $data[6] ?? "";
    $departemen = $data[7] ?? "";
    $kantor = $data[8] ?? "";
    $verifikasi = $data[9] ?? "";
    $io = $data[10] ?? "";
    $workcode = $data[11] ?? "";
    $sn = $data[12] ?? "";
    $mesin = $data[13] ?? "";
    // var_dump($data);
}
}
    // Cek apakah nilai NIP dan tanggal sudah ada di database
    $sql = "SELECT * FROM absen_log WHERE nip = '$nip' AND tanggal = '$tanggal'";
    $result = $conn->query($sql);
// var_dump($sql);

   
    if (mysqli_num_rows($result) == 0) {
        // Jika nilai NIP dan tanggal tidak ada di database, masukkan data ke dalam database
        $sql = "INSERT INTO absen_log (tanggal_scan, tanggal, jam, pin, nip, nama, jabatan, departemen, kantor, verifikasi, io, workcode, sn, mesin)
        VALUES ('$tanggal_scan', '$tanggal', '$jam', '$pin', '$nip', '$nama', '$jabatan', '$departemen', '$kantor', '$verifikasi', '$io', '$workcode', '$sn', '$mesin')";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil dimasukkan ke dalam database.\n";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Data NIP:$nip & tanggal:$tanggal sudah ada di database.\n";
    }
    
}
 echo '</textarea>';
fclose($file);
$conn->close();
?>
