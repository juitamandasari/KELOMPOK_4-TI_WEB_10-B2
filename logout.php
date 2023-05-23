<?php
   session_start();
   session_destroy();
?>
<?php
{echo "<script> alert('Anda telah berhasil Keluar!');
      document.location.href = 'login.php';
      </script>";}
?>

