<?php

require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM absen_log";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'tanggal_scan' => $data['tanggal_scan'],
		'tanggal' => $data['tanggal'],
		'jam' => $data['jam'],
		'pin' => $data['pin'],
		'nip' => $data['nip'],
		'nama' => $data['nama'],
		'jabatan' => $data['jabatan'],
		'departemen' => $data['departemen'],
		'kantor' => $data['kantor'],
		'verifikasi' => $data['verifikasi'],
		'io' => $data['io'],
		'workcode' => $data['workcode'],
		'sn' => $data['sn'],
		'mesin' => $data['mesin'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `absen_log` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'tanggal_scan' => $data['tanggal_scan'], 
		'tanggal' => $data['tanggal'], 
		'jam' => $data['jam'], 
		'pin' => $data['pin'], 
		'nip' => $data['nip'], 
		'nama' => $data['nama'], 
		'jabatan' => $data['jabatan'], 
		'departemen' => $data['departemen'], 
		'kantor' => $data['kantor'], 
		'verifikasi' => $data['verifikasi'], 
		'io' => $data['io'], 
		'workcode' => $data['workcode'], 
		'sn' => $data['sn'], 
		'mesin' => $data['mesin'], 
		
    );
  }
return $datas;
}

function Insert(){
  $tanggal_scan=$_POST['tanggal_scan']; 
		$tanggal=$_POST['tanggal']; 
		$jam=$_POST['jam']; 
		$pin=$_POST['pin']; 
		$nip=$_POST['nip']; 
		$nama=$_POST['nama']; 
		$jabatan=$_POST['jabatan']; 
		$departemen=$_POST['departemen']; 
		$kantor=$_POST['kantor']; 
		$verifikasi=$_POST['verifikasi']; 
		$io=$_POST['io']; 
		$workcode=$_POST['workcode']; 
		$sn=$_POST['sn']; 
		$mesin=$_POST['mesin']; 
		
  $query = "INSERT INTO `absen_log` (`id`,`tanggal_scan`,`tanggal`,`jam`,`pin`,`nip`,`nama`,`jabatan`,`departemen`,`kantor`,`verifikasi`,`io`,`workcode`,`sn`,`mesin`)
VALUES (NULL,'$tanggal_scan','$tanggal','$jam','$pin','$nip','$nama','$jabatan','$departemen','$kantor','$verifikasi','$io','$workcode','$sn','$mesin')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
function Update($id){
  $tanggal_scan=$_POST['tanggal_scan']; 
		$tanggal=$_POST['tanggal']; 
		$jam=$_POST['jam']; 
		$pin=$_POST['pin']; 
		$nip=$_POST['nip']; 
		$nama=$_POST['nama']; 
		$jabatan=$_POST['jabatan']; 
		$departemen=$_POST['departemen']; 
		$kantor=$_POST['kantor']; 
		$verifikasi=$_POST['verifikasi']; 
		$io=$_POST['io']; 
		$workcode=$_POST['workcode']; 
		$sn=$_POST['sn']; 
		$mesin=$_POST['mesin']; 
		
  $query = "UPDATE `absen_log` SET `tanggal_scan` = '$tanggal_scan',`tanggal` = '$tanggal',`jam` = '$jam',`pin` = '$pin',`nip` = '$nip',`nama` = '$nama',`jabatan` = '$jabatan',`departemen` = '$departemen',`kantor` = '$kantor',`verifikasi` = '$verifikasi',`io` = '$io',`workcode` = '$workcode',`sn` = '$sn',`mesin` = '$mesin' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
function Delete($id){
  $query = "DELETE FROM `absen_log` WHERE `id` = '$id'";
  $exe = mysqli_query(Connect(),$query);
    if($exe){
      // kalau berhasil
      $_SESSION['message'] = " Data Sudah dihapus ";
      $_SESSION['mType'] = "success ";
      header("Location: index.php");
    }
    else{
      $_SESSION['message'] = " Data Gagal dihapus ";
      $_SESSION['mType'] = "danger ";
      header("Location: index.php");
    }
}


function Duplicate($id){
    $one = GetOne($id);
  $tanggal_scan=$one[0]["tanggal_scan"]; 
		$tanggal=$one[0]["tanggal"]; 
		$jam=$one[0]["jam"]; 
		$pin=$one[0]["pin"]; 
		$nip=$one[0]["nip"]; 
		$nama=$one[0]["nama"]; 
		$jabatan=$one[0]["jabatan"]; 
		$departemen=$one[0]["departemen"]; 
		$kantor=$one[0]["kantor"]; 
		$verifikasi=$one[0]["verifikasi"]; 
		$io=$one[0]["io"]; 
		$workcode=$one[0]["workcode"]; 
		$sn=$one[0]["sn"]; 
		$mesin=$one[0]["mesin"]; 
		
   $query = "INSERT INTO `absen_log` (`tanggal_scan`,`tanggal`,`jam`,`pin`,`nip`,`nama`,`jabatan`,`departemen`,`kantor`,`verifikasi`,`io`,`workcode`,`sn`,`mesin`)
VALUES ('$tanggal_scan','$tanggal','$jam','$pin','$nip','$nama','$jabatan','$departemen','$kantor','$verifikasi','$io','$workcode','$sn','$mesin')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
if(isset($_POST['insert'])){
  Insert();
}
else if(isset($_POST['update'])){
  Update($_POST['id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['id']);
}
else if(isset($_POST['duplicate'])){
  Duplicate($_POST['id']);
}
?>
