<html>
<head>
    
    <?php
    session_start();
    if(isset($_SESSION['username'])) {
    header('location:Tabel.php'); }
    require_once("koneksi.php");
    ?>

	<title>SILAHKAN Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>WWW.INPUT_BARANG.COM</h2></center>	
	<div class="login">
		<form action="proseslogin.php" method="post">
			<center><img src="images.png" align = "center"></center>
			<br>
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
                <input type="submit" value="Login" class="tombol">
            </div>
		</form>
	</div>
</body>
</html>