<title>Login</title>
<style>
   body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh; 
      margin: 0;
      background-image: url("bg.jpg");
      background-size: cover;
      color: white;
    }
    .kotak {
      width: 330px;
      height: 450px;
      background-color: white;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 20px;
      box-sizing: border-box;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 1); /* Efek bayangan */
    }
    table{
      align-items: center;
    }
    h1{
      color : #bfb7b6;
    }
    tbody{
      color : #bfb7b6;
    }
    input[type="text"], input[type="password"] {
      width: 250px;
      height: 40px;
      background :  #fffafa;;
      border: 1 solid #efeeee;
      padding: 5px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); 
    }
    .button {
        background: #df4231;
        color: #ffffff;
        width: 150px;
        margin-top: 10px;
        height: 40px;
        border: 1px solid #c9c9c9;
        border-radius: 5px;
        transition: 1s all;
        -moz-transition: 1s all;
        -o-transition: 1s all;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); 
    }
  </style>
<body background="bg.jpg" text="white">
<div class="kotak" align='center'>
  <form action="proseslogin.php" method="post">
  <h1 align="center">LOGIN</h1>
  <table cellspacing=15>
  <tbody>
  <tr>
    <td>USERNAME</td>
  </tr>
  <tr>
    <td><input name="username" type="text" size="42" maxlength="25" placeholder=""></td>
  </tr>
  <tr>
    <td>PASSWORD </td>
  </tr>
  <tr>
    <td><input name="password" type="password" mixlength="8" required></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input class="button" value="Login" type="submit">
  </td>
</tr>
<tr>
  <td colspan="2" align="center"><a href="daftar.php"><b>Create New Account</b></a></td></tr>
</tbody>
</table>
</form>
</div>
</body>

