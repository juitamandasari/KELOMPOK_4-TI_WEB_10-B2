<?php
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $dbname = "db_user";
   $conn = mysqli_connect ($hostname,$username,$password,$dbname);
   if ($conn) {echo "<b></b>";}
   else{die ("<b> koneksi Gagal</br>");}
?>
