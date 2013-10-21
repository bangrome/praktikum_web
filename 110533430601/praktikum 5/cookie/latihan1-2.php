<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Cek Dukungan Cookie</title>
</head>
<body>
<?php
if(isset($_GET['q'])&&$_GET['q']==1){
	if(isset($_COOKIE['test'])){
		echo 'support';
	}
	else{
		echo 'tidak support';
	}
}
else{
	setcookie('test', 'value');
	$self=$_SERVER['PHP_SELF'];
	//redireksi ke current script
	header('Location: '.$self. '?q=1');
	exit;
}
?>
<p>tekan refresh (F5)<p/>
</body>
</html>