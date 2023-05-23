<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $db->prepare("SELECT * FROM tb_user WHERE username = ?");
   $query->execute(array($username));
   if($query->rowCount() != 0) 
   {echo "<script> alert('Username sudah Terdaftar!');
    document.location.href = 'daftar.php';
    </script>";}
    else {
    if(!$username || !$pass) {
    echo "<script> alert('Masih ada data yang kosong');
    document.location.href = 'daftar.php';
    </script>";}
    
    else {
    $sql = $db->prepare("INSERT INTO tb_user (username, password) VALUES (?, ?)");
    $simpan = $sql->execute(array($username, $pass));
    if($simpan)
    {echo "<script> alert('Pendaftaran Sukses, Silahkan Login!');
      document.location.href = 'login.php';
      </script>";}
    else {echo "<script> alert('Proses Gagal!')</script>";}
 }
 }
?>
