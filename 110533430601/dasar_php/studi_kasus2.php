<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Tabel Statis</title>
</head>

<body>

<?php
function BuatTabel($baris, $kolom){
	print("<table align=\"left\" width = \"25%\" border=\"1\">\n");
    $i=1;
	for($b = 0; $b < $baris; $b++){
		print("<tr>\n");
		for($k = 0; $k < $kolom; $k++){
			print("<td height=\"30\" width=\"10%\">$i</td>\n");
			$i++;
		}
		print("</tr>\n");
    }
    print("</table>\n");
}
BuatTabel(3,4);
?>

</body>
</html>