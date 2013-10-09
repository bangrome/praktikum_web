<!DOCTYPE html 
PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<title>Data Checkbox</title> 
</head> 
<body> 
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
Hobi 
<input type="checkbox" name="hobby[]" value="Membaca" 
<?php 
if (isset($_POST['hobby'])) {
	foreach ($_POST['hobby'] as $key => $val) {	//mengecek anggota array
	if($val=="Membaca")	//jika anggota array terdapat nilai "Membaca"
	echo 'checked';	//maka aktifkan checked
	} 
}
?> 
/>Membaca 
<input type="checkbox" name="hobby[]" value="Olahraga" 
<?php 
if (isset($_POST['hobby'])) {
	foreach ($_POST['hobby'] as $key => $val) { //mengecek anggota array
	if($val=="Olahraga")	//jika anggota array terdapat nilai "Olahraga"
	echo 'checked';	//maka aktifkan checked
	} 
} 
?> 
/>Olahraga 
<input type="checkbox" name="hobby[]" value="Menyanyi" 
<?php 
if (isset($_POST['hobby'])) { 
	foreach ($_POST['hobby'] as $key => $val) { //mengecek anggota array
	if($val=="Menyanyi")	//jika anggota array terdapat nilai "Menyanyi"
	echo 'checked';	//maka aktifkan checked
	} 
}
?> 
/>Menyanyi <br /> 
<input type="submit" value="ok" /> 
</form> 
<?php 
// Ekstraksi nilai 
if (isset($_POST['hobby'])) { 
foreach ($_POST['hobby'] as $key => $val) { //menampilkan setiap anggota array
echo $key . ' -> ' .$val . '<br />'; 
} 
} 
?>

</body> 
</html>