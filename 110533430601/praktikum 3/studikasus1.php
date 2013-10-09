<!DOCTYPE html>
<html>
<head><title>Preseleksi Data Seleksi</title></head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method ="post"> <!--form ditangani oleh script atau file ini dengan metode POST-->
Pekerjaan
<select name="hoby">
	<!--option Mahasiswa-->
	<option value="Makan"
		
	<?php
	if (@$_POST['hoby'] == 'Makan') { // memeriksa apakah form select 'hoby' yang terpilih memiliki value 'Makan'
	echo 'selected';	
	}
	?> 
	>Makan
	<!--Preselected yang pertama kali dipilih adalah Tidur-->
	<option value="Tidur"
	<?php
				if(@$_POST['hoby'] == "Tidur" ){ // memeriksa apakah form select 'hoby' yang terpilih memiliki value 'Tidur'
					echo 'selected'; //jika ya, maka setelah submit maka option Tidur yang akan ditampilkan di dropdown
				}
	?>
	>Tidur
	
	<!--Preselected yang pertama kali dipilih adalah Baca-->
	<option value="Baca" 
	<?php
				if(@$_POST['hoby'] == "Baca"){ // memeriksa apakah form select 'hoby' yang terpilih memiliki value 'Baca'
					echo 'selected'; //jika ya, maka setelah submit maka option Baca yang akan ditampilkan di dropdown
				}
	?>
	>Baca
	<!--Submit button-->
	<option value="Nyanyi"
	<?php
				if(@$_POST['hoby'] == "Nyanyi"){ // memeriksa apakah form select 'hoby' yang terpilih memiliki value 'Nyanyi'
					echo 'selected'; //jika ya, maka setelah submit maka option Nyanyi yang akan ditampilkan di dropdown
				}
	?>
	>Nyanyi
</select> 
<input type="submit" value="OK"/> <!--Submit button-->
</form>

<?php
if (isset($_POST['hoby'])) { //jika form select hoby ada yang terpilih maka jalankan statement
	echo  $_POST['hoby']; // statement menampilkan string 'Hello, (disertai string yang dipilih di text field)
}

?>


</body>
</html>