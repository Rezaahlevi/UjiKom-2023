<!doctype html>
<html lang="en">
  <head>
  <title>Form Register Masyarkat</title>
  <link rel="icon" href=".//img/icon.jpg  ">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    <!-- <link href=".//css/bootstrap.min.css" rel="stylesheet"> -->
    <link href=".//css/register.css">

    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- kode untuk mengkaitkan css register -->
    <link href=".//css/register.css" rel="stylesheet" type="text/css" media="all" />
    <!-- kode untuk font yang diambil dari web online -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  </head>
  <body class="text-center">
  <div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top">
<form class="form-signin" action="pregis.php" name="proses" method="POST">
  <center><img class="mb-4" src=".//img/avataruser.png" alt="" width="72" height="72"></center>
  <h1>Daftar akun</h1>
  <label for="inputEmail" class="sr-only">NIK</label>
  <input type="text" name="nik" class="form-control" placeholder="NIK" required autofocus>
  
  <label for="inputEmail" class="sr-only">Nama</label>
  <input type="text" name="nama" class="form-control" placeholder="nama" required autofocus>
  
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="inputEmail" name="username" class="form-control" placeholder="username" required autofocus>
  
  <label for="inputEmail" class="sr-only">Password</label>
  <input type="Password" name="password" class="form-control" placeholder="Password" required autofocus>
  
  <label for="inputno" class="sr-only">No Telepon</label>
  <input type="text" name="telp" class="form-control" placeholder="Nomor HP" required autofocus>
  
    <label>
    </label>
  </div>
  <center><button class="button" type="submit">Daftar</button></center>
  <br></br>
  <p class="text-left">sudah ada akun <a href="index.php">Klik disini</a></p>
</form>
  </body>
</html>