<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>By Value By Reference</title>
</head>
<body>
<?php
$a = 5;
$b = 7;
$c =& $b;//$c reference ke $b artinya nilai $c & $b akan selalu sama
 
function n(&$n){//fungsi n passing by reference terhadap variable yang dijadikan parameternya
    return ++$n;
}
 
function x($x){//fungsi n passing by value terhadap variable yang dijadikan parameternya
    return ++$x;
}
 
//Testing
echo n($b).'<br/>';//PBR
echo $b.'</br>';
echo '=========================</br>';
echo x($a).'<br/>';//PBV
echo $a.'<br/>';
echo '=========================</br>';
 
++$b;
 
echo x($b).'<br/>';//PBV
echo $c;
/**
Output
 
8
8
=========================
6
5
=========================
10
9
**/
?>
</body>
</html>