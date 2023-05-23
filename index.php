<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<style type="text/css">
		body {
			color: black;
			background: #ffecea;
			padding: 0;
			margin: 0;
			font-family: sans-serif;
		}

		.menu-home {
			background-color: #df4231;
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
			padding: 10px;
		}
		.card {
			width: 15rem;
			border: 3px;
			border-radius: 20px;
			padding: 20px;
			box-shadow: 0px 0px 10px rgba(255, 0, 0, 0.5); 
		}
	</style>
</head>
<body>
<header class="header">
		<div class="menu-home">
			<ul>
				<li class="dropdown"><a href="index.php">Buku Tamu</a>
				<li class="dropdown" style="float: right;">
	</lu>
	<ul class="dropdown">
		<li>
			<a href="logout.php">Logout
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
			<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
			</svg></a>
		</div>
	</header>
<?php
session_start();
if(!isset($_SESSION['username']))
{ header('location:login.php');} else {
$username = $_SESSION['username'];}
?>
<br>

<div align='center'>
<h3> <b>Selamat Datang,</b> <b><?php echo $username;?></b>
<?php echo '<b>Silahkan Isi Buku Tamu dan Lihat Daftar Buku Tamu</b>'; ?>
</div>
	<br>
	

	<table align="center" cellpadding=20>
		<tr>
			<td>
			<div class="card" style="width: 15rem; border: 3;" >
			<img src="isi.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Silahkan Isi Buku Tamu</h5>
				<p class="card-text"></p>
				<a href="isidata.php" class="btn btn-primary">Isi Buku Tamu</a>
			</div>
			</td>
			<td>

			<div class="card" style="width: 15rem; border: 3;" >
			<img src="tampil.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Silahkan Lihat Daftar Buku Tamu</h5>
				<p class="card-text"></p>
				<a href="tampildata.php" class="btn btn-primary">Daftar Buku Tamu</a>
			</td>
			</tr>
			</div>
	</table>
</body>
</html>
