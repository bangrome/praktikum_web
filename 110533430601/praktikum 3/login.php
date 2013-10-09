<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Login</title>
</head>
<body>
<p align="bottom">
<?php
	if((is_string($_POST['GetUsername']) && ($_POST['GetPassword'])) && ($_POST['GetUsername']!="") && ($_POST['GetPassword']!="")){	//jika username dan password tidak kosong
		if(($_POST['GetUsername']=='admin') && ($_POST['GetPassword']=='rahasia')){	//jika username dan password sesuai
			echo '<span><center>Welcome!!!';	//maka tampilkan ucapan selamat datang
			echo '<br>you are logged in as: <br>';
			echo '<br><h3>Username: ' . $_POST['GetUsername'];	//tampilkan Username
			echo '<br>Password: '. $_POST['GetPassword'].'</h3></center></span>';	//dan Password
		}
		else 	//jika username dan password tidak sesuai
		{
			echo "<span><center>Invalid ID or password. Please try again";	//maka tampilkan peringatan berikut
			echo "</center></span>";
		}
	}
?>
</p>
</body>
</html>