<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Cek Tipe</title>
</head>

<body>

<?php
//deklarasi dan inisialisasi
$bil=3;
//dumping informasi mengenai variabel
var_dump(is_int($bil));
//output: bool(true)

//deklarasi dan inisialisasi
$var="";
//dumping informasi mengenai variabel
var_dump(is_string($var));
//output: bool(true)
?>

</body>
</html>