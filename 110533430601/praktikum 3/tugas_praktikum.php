<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Login</title>

<SCRIPT LANGUAGE="JavaScript">	//kode javascript
function LetterOnly(evt) {	//fungsi yang mengizinkan input hanya berupa string,bukan huruf
	evt = (evt) ? evt : window.event;	//evt, variabel input dari event window
	var charCode = (evt.which) ? evt.which : evt.keyCode;	//deklarasi variabel charCode
	if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {	//jika input berupa angka,
		status = "Isikan data dengan huruf (A-Z/a-z)";	//maka tampilkan status berikut, angka tidak diizinkan
		return false;
	}else{	//jika input bukan angka
		status = "";
		return true;	//maka string tampil (diizinkan) input
	}
	
}

function FormStatus(){
	USN = LoginForm.GetUsername.value;	//variabel USN = nilai dari GetUsername (berisi username)
	PWD = LoginForm.GetPassword.value;	//variabel PWD = nilai dari GetPassword (berisi password)
		if (USN == ""&&PWD=="") {	//jika username dan password kosong,
			alert("User dan password tidak boleh Kosong");	//maka tampilkan peringatan berikut
			document.LoginForm.GetUsername.focus();	//fokus kembali pada field username
			return false;	//tetap pada halaman ini
		}
		else if(USN == ""){	//jika username kosong
			alert("Username tidak boleh Kosong");	//maka tampilkan peringatan berikut
			document.LoginForm.GetUsername.focus();	//fokus kembali pada field username
			return false;	//tetap pada halaman ini
		}
		else if(PWD==""){	//jika password kosong
			alert('Jangan lupa Masukkan Password');	//maka tampilkan peringatan berikut
			document.LoginForm.GetPassword.focus();	//fokus kembali pada field password
			return false;	//tetap pada halaman ini
		}else{
			return true;	//load halaman selanjutnya
		}	
}

</SCRIPT>

</head>
<body onLoad="document['LoginForm']['GetUsername'].focus()">	
	<table width="343" border="0" cellspacing="1" cellpadding="1">
	<form name="LoginForm" action="login.php" method="post" onSubmit="return FormStatus()">
	<tr bgcolor="#344323">
		<td colspan="2" bgcolor="#006600"><div align="center"><font color="#FFFFFF"><strong> Login User</strong></font></div></td>
	</tr>
	<tr bgcolor="#9DC69F">
		<td width="64">USER</td>
		<td width="272">
			<?PHP
				echo '<input type="text" name="GetUsername" onKeyPress="return LetterOnly(event)"';	//input username, angka tidak diizinkan
				echo (isset($_POST['GetUsername'])) ? ' value="'.$_POST['GetUsername'].'"' : ' value=""';	//prefilling
				if (empty($_POST['GetUsername'])==true) echo '>';
			?>
		</td>
	</tr>
	<tr bgcolor="#9DC69F">
		<td width="64">Password</td>
		<td width="272">
			<?php
				echo '<input type="Password" name="GetPassword" onKeyPress="return LetterOnly(event)"';	//input password, angka tidak diizinkan
				echo (isset($_POST['GetPassword'])) ? ' value="'.$_POST['GetPassword'].'"' : ' value=""';	//prefilling
				if (empty($_POST['GetPassword'])==true) echo '>';
			?>
		</td>
	</tr>
	<tr bgcolor="#9DC69F">
	<td height="40" colspan="2">
		<input type="submit" name="submit" value="Login" div align="center" />
	</td>
</body>
</html>