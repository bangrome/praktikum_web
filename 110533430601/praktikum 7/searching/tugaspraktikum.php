<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Tugas Praktikum</title>
	</head>

	<body>
		<h2>Pengurutan Data</h2>
		<table border="1" cellspacing="1" cellpadding="5">
			<tr>
				<td>#</td>
			<?php
				$sort = isset($_GET['sort']) ? $_GET['sort'] : 'ASC'; //keadaan awal $sort bernilai asceding
				if($sort=='ASC'){ //ketika ascending
					$temp='DESC'; //var. temp menyimpan nilai 'DESC'
					$sort=$temp; //var $sort didefinisikan berisi value var. $temp
					
				}else{ //kondisi lain 
					$temp='ASC'; //var. temp menyimpan nilai 'ASC'
					$sort=$temp; //var $sort didefinisikan berisi value var. $temp
				}
				//diberikan link untuk setiap header yang berisi link sorting
				echo '<td width="100"><a href="'.@$self.'?kolom=nim&&sort='.$sort.'">NIM</a></td>';
				echo '<td width="150"><a href="'.@$self.'?kolom=nama&&sort='.$sort.'">Nama</a></td>';
				echo '<td><a href="'.@$self.'?kolom=alamat&&sort='.$sort.'">Alamat</a></td>';
			?>
			</tr>
			<?php
			require_once "./koneksi.php";
			$kolom = isset($_GET['kolom']) ? $_GET['kolom'] : ''; //kolom ditampilkan bersarakan entitas
			if($kolom=='' || $sort==''){ // jika var $kolom atau $sor kosong
				$sql='SELECT * FROM mahasiswa'; //semua data dari tabel mahasiswa diseleksi
			}else{ //kondisi lain
				$sql='SELECT * FROM mahasiswa ORDER BY '.$kolom.' '.$sort; // data yang ditampilkan entitas dan jenis sorting
			}
			$res = mysql_query($sql); //eksekusi pernnyataan sql
			$i=1; 
			if($res){
				//menampilkan hasil dengan perulangan
				while($row=mysql_fetch_row($res)){?>
					<tr>
						<td><?php echo $i;?></td>
						<td width="100"><?php echo $row[0];?></td>
						<td width="150"><?php echo $row[1];?></td>
						<td><?php echo $row[2];?></td>
					</tr>
					<?php
					$i++;
				}	
			}
		?>
		</table>
	</body>
</html>