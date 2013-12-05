<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Function & Procedure</title>
</head>

<body>

<?php
//procedure
function do_print(){
	//print timestamp
	echo time();
	}

//calling procedure
do_print();

echo '<br />';

//adding function
function jumlah($a,$b){
	return($a+$b);
	}

//calling function
echo jumlah(2,3);
//output: 5
?>

</body>
</html>