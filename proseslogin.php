<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $db->prepare("SELECT * FROM tb_user WHERE username = ?");
   $query->execute(array($username));
   $hasil = $query->fetch();
   if($query->rowCount() == 0)
   {echo "<script> alert('Username belum terdaftar');
      document.location.href = 'login.php';
      </script>";}
   else {
   if($pass <> $hasil['password']) {
      {echo "<script> alert('Password salah!');
         document.location.href = 'login.php';
         </script>";}
   } else {
   $_SESSION['username'] = $hasil['username'];
   header('location:index.php');
   }
   }
?>
<body bgcolor="black" text="white">
</body>
