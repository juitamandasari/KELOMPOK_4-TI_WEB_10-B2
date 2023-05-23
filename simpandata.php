<?php
include ("koneksidata.php");
$Nama=$_POST['Nama'];
$No_HP=$_POST['No_HP'];
$Email=$_POST['Email'];
$Tujuan=$_POST['Tujuan'];
$Waktu=$_POST['Waktu'];
$Keperluan=$_POST['Keperluan'];
$sql = "INSERT INTO tb_bukutamu (Nama, No_HP, Email, Tujuan, Waktu, Keperluan)
VALUES ('$Nama', '$No_HP', '$Email', '$Tujuan', '$Waktu', '$Keperluan')";
if ($conn->query($sql) === TRUE)
{echo "<script> alert('Data Berhasil disimpan');
  document.location.href = 'isidata.php';
  </script>";}else
{echo "Error: " . $sql . "<br>" . $conn->error;}
$conn->close();
?>
</body>
</html>
