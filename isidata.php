<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Isi Buku Tamu</title>
</head>
<script language="javascript">
    function hanyaAngka(e, decimal) {
    var key;
    var keychar;
    if (window.event) {
    key = window.event.keyCode;
    } else if (e) {
    key = e.which;
    } else return true;

    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
    return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
    return true;
    } else
    if (decimal && (keychar == ".")) {
    return true;
    } else return false;
    }

    function huruf(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
    return false;
    return true;
    }
</script>
    <style>
     body {
			color: black;
			background: #ffecea;
			padding: 0;
			margin: 0;
			font-family: sans-serif;
		}
    input[type="text"], input[type="date"] {
      width: 300px;
      height: 70px;
      background :  #fffafa;;
      border: 1 solid #efeeee;
      padding: 5px;
      border-radius: 10px;
      align: center;
    }
    form{
      font-family: sans-serif;
    }
    input[type="reset"], input[type="submit"] {
      width: 100px;
      height: 50px;
      background :  #191970;
      border: 1 solid #efeeee;
      padding: 5px;
      border-radius: 10px;
      color : white;
    }
    /* header */
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
      position: absolute;
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
      position: fixed;
      top: 10px;
      right: 10px;
      padding: 10px;
      margin: 0;
    }
    </style>
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

    <form action="simpandata.php" method="post">
    <div align='center'>
    <p></p>
    <table border="1" cellpadding="10" cellspacing="0" >
  <tr>
    <th colspan="2"><h2 align="center">ISI DAFTAR BUKU TAMU</h2></th>
  </tr>
  <tr width="50%">
    <td width="50%" align="center">Nama</td>
    <td width="100%" align="center"><input type="text" name="Nama" placeholder="Masukan nama" onkeypress="return huruf(event)" /></td>
  </tr>
  <tr>
    <td align="center">No_HP</td>
    <td align="center"><input type="text" name="No_HP" placeholder="Masukan nomor telpon" onkeypress="return hanyaAngka(event)" /></td>
  </tr>
  <tr>
    <td align="center">Email</td>
    <td align="center"><input type="text" name="Email" placeholder="Masukan email" onkeypress="return huruf dan angka(event, false)" /></td>
  </tr>
  <tr>
    <td align="center">Tujuan</td>
    <td align="center"><input type="text" name="Tujuan" placeholder="Ketik orang dan satker tujuan" onkeypress="return huruf(event)" /></td>
  </tr>
  <tr>
    <td align="center">Waktu</td>
    <td align="center"><input type="date" name="Waktu" onkeypress="return huruf dan angka(event)" /></td>
  </tr>
  <tr>
    <td align="center">Keperluan</td>
    <td align="center"><input type="text" name="Keperluan" onkeypress="return huruf dan angka(event)" /></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" name="simpan" value="Simpan"> 
      <input type="reset" name="Hapus" value="Hapus"></td>
  </tr>
</table>
</div>
</form>
<script type="text/javascript">
window.setTimeout("waktu()",1000);
function waktu() {
var tanggal = new Date();
setTimeout("waktu()",1000);
document.getElementById("tanggalku").innerHTML
= tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();}
</script>
</head>
<body bgcolor="white" text="white" onload="waktu()">
<table align=center style="border:1px solid white" bgcolor="#191970"><tr><td>
<div id="tanggalku">
</div></td></tr>
</table>
</body>
</html>
<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo '<font face="freemono" size="5">';
echo '<table align="center" border="3" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
echo "Hari ini tanggal : ".date("d F Y ",mktime(0,0,0,$month,$day,$year));
echo '</td></tr></table>';
echo '<table align="center" border="1" cellpadding=2 cellspacing=1 style="border:2px solid #ccc">
   <tr bgcolor="white">
   <td align=center><font color=red>Minggu</font></td>
   <td align=center>Senin</td>
   <td align=center>Selasa</td>
   <td align=center>Rabu</td>
   <td align=center>Kamis</td>
   <td align=center>Jumat</td>
   <td align=center>Sabtu</td>
   </tr>';
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++)
{echo "<td style=\"font-family:arial;color:#fff\" align=center valign=middle bgcolor=\"\"></td>";}
for ($d=1;$d<=$endDate;$d++)

{ if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
   $fontColor="#000";
   if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun")
   { $fontColor="red"; }
   echo "<td style=\"font-family:arial;color:#000\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
   if (date("w",mktime (0,0,0,$month,$d,$year)) == 6)
   {
     echo "</tr>";
}
}
echo '</table>';
?>

