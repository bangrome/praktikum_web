<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Set Session</title>
</head>
<body>
<?php
//inisialisasi data session
session_start();
//set session jika belum ada
if(isset($_SESSION['test'])){
	$_SESSION['test']='value';
}
else{
	echo 'session di-set <br />';
	//mencetak nilai session tes
	echo 'nilai: '.$_SESSION['test'].'<br />';
	print_r($_SESSION);
}
?>
<p>tekan refresh (F5)<p/>
</body>
</html>