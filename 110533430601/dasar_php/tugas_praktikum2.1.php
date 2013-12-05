<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Input Tabel</title>
<style type="text/css">
<!--
#apDiv1 {
position:absolute;
width:178px;
height:24px;
z-index:1;
left: 284px;
top: 189px;
}
.style1 {
color: #0000CC;
font-weight: bold;
}
-->
</style>
</head>
<body>
<form method="post" action="tugas_praktikum2.2.php">
<h3 align="center" class="style1">__Tabel Fleksibel Dengan Generate Table__</h3>
<div align="center">
<table width="327" border="0" bgcolor="#FFFFFF">
<tr bgcolor="#FFFFCC">
<td width="121" style="text-align:center">Rows</td>
<td width="196"><strong>= </strong>
<input name="JumlahRow" type="text" id="JumlahRow" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr bgcolor="#CCFFCC">
<td style="text-align:center"><label>Columns</label></td>
<td><strong>= </strong>
<input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"></td>
</tr>
<tr bgcolor="#FFFFCC">
<td style="text-align:center">Cell Total </td>
<td><strong>= </strong>
<input name="JumlahCell" type="text" id="JumlahCell" onKeyUp="getmax();" onFocus="this.select();"></td>
</tr>
<tr bgcolor="#CCFFCC">
<td style="text-align:center">Max Cells </td>
<td><strong>= </strong>
<input name="maxcells" type="text" id="maxcells" disabled="disabled" style="text-align:center"></td>
</tr>
</table>
</div>
<div id="apDiv1">
<input type="submit" name="Generate" value="G e n e r a t e"><input type="reset" name="Reset" value="R e s e t">
</div>
</form>
</body>
<script language="JavaScript" type="text/javascript">
<!--
function getmax() {
var R = parseInt(document.getElementById('JumlahRow').value);
var C = parseInt(document.getElementById('JumlahColum').value);
var X = parseInt(document.getElementById('JumlahCell').value);
var cellmax = document.getElementById('maxcells');
var total = 'N/A';
total = R * C;
cellmax.value = new String(total);
if (X > total)
{
alert('Cell Total Yang Anda Masukkan Terlalu Besar, Nilai Maksimum Cells = ' + total);
document.getElementById('CellsTotal').value = new String();
}
}
//-->
</script>
</html>