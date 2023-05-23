<!DOCTYPE html>
<html>
<head>
<title>Daftar Isi Buku Tamu</title>
<style>
 body {
	color: black;
	background: #ffecea;
	padding: 0;
	margin: 0;
	font-family: sans-serif;
 }
table {
  border-collapse: collapse;
  width: 97%;
  margin-top: 0; 
}

table, th, td {
  border: 1px solid black
  align : center;
}

th {
  background-color: #a9a9a9;
}

th, td {
  padding: 10px;
  text-align: left;
}

tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

tbody tr:hover {
  background-color: #e5e5e5;
}

/* Header */
.header {
  margin: 0; 
  padding: 0; 
}

.menu-home {
  background-color: #df4231;
  margin-bottom: 0; 
}

.menu-home ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.menu-home > ul > li {
  float: left;
  
}

.menu-home li a {
  position: relative;
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}

.menu-home li a:hover {
  background-color: white;
}

li.dropdown {
  display: inline-block;
}

.dropdown:hover .isi-dropdown {
  display: block;
}

.isi-dropdown a:hover {
  color: #fff !important;
}

.isi-dropdown {
  position: absolute;
  display: none;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  background-color: #f9f9f9;
  right:0;
  min-width: 100px;
  
}
.isi-dropdown a {
  color: #3c3c3c !important;
}

.isi-dropdown a:hover {
  color: #232323 !important;
  background: #f3f3f3 !important;
}
.svg-container {
  position: absolute;
  top: 0;
  right: 0;
  padding: 1px;
}
</style>
</head>
<body>
	<header class="header">
		<div class="menu-home">
			<ul>
				<li class="dropdown"><a href="index.php">Home</a>
				<li class="dropdown" style="float: right;">
	</lu>
	<ul class="dropdown">
		<li>
					<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
					<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
					<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
				</svg></a>
				<ul class="isi-dropdown">
					<li><a href="logout.php"><b>Logout</b></a></li>
				</ul>
		</div>
	</header>
<?php
include("koneksidata.php");
$sql = "SELECT Nama, No_HP, Email, Tujuan, Waktu, Keperluan FROM tb_bukutamu";
$query = mysqli_query($conn, $sql);

if (!$query) {
    die('SQL Error: ' . mysqli_error($conn));
}
echo '
    <h4 align="center">Tabel Daftar Buku Tamu</h4>
    <table width="500" border="3" align="center">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No_HP</th>
                <th>Email</th>
                <th>Tujuan</th>
                <th>Waktu</th>
                <th>Keperluan</th>
            </tr>
        </thead>
        <tbody>';
while ($row = mysqli_fetch_array($query)) {
    echo '
        <tr>
            <td>' . $row['Nama'] . '</td>
            <td>' . $row['No_HP'] . '</td>
            <td>' . $row['Email'] . '</td>
            <td>' . $row['Tujuan'] . '</td>
            <td>' . $row['Waktu'] . '</td>
            <td>' . $row['Keperluan'] . '</td>
        </tr>';
}
echo '
        </tbody>
    </table>';

mysqli_free_result($query);
mysqli_close($conn);
?>
</body>
</html>
