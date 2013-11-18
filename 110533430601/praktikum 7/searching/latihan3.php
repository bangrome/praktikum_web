<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paging Data</title>
</head>

<body>
<?php
require_once './koneksi.php';
//************Setup paging
$sql = 'SELECT * FROM mahasiswa'; //menyeleksi seluruh data dari tabel Mahasiswa


$page = isset($_GET['page']) ? $_GET['page'] : 0; // jika value tidak terisi maka value $page adalah 0

//jumlah link counter, misal (prev 1 2 3 next) = 3
$link_num=5;
//jumlah record per halaman
$record_num=5;

//item pertama yang akan ditampilkan
$offset = $page ? ($page-1) * $record_num :0;

$total_rows = mysql_num_rows(mysql_query($sql));
$query 		= $sql. ' LIMIT ' . $offset . ', ' . $record_num; //membatasi data yang ditampilkan sebanyak 5 ($record_num)
$result		=  mysql_query($query); //eksekusi query
$max_page	= ceil($total_rows/$record_num); // hal. maximal ditentukan dari jumlah row yang ada dibagi record yang akan ditampilkan

//reset jika page tidak sesuai
if ($page>$max_page||$page<=0) {
	$page=1;
}

//************Generate paging
$paging = '';
if($max_page>1) {
	//*** Render link previous
	if ($page>1) { //jika halaman yang dihasilkan > 1
		$paging .= ' <a href="'.@$self.'>page='.($page-1).'">Previous</a>'; //'Previouse' akan berisi link memundurkan 1 halaman jika di klik
	} else {
		$paging .= 'previous ';
	}

//*** Render link counter halaman
	for ($counter = 1; $counter <= $max_page; $counter += $link_num) { //perulangan untuk counter halaman
		if ($page>= $counter ) {
			$start = $counter;
		}
	}
	if($max_page>$link_num) { //jika link num lebih dari jumlah max. hal. yang ditetapkan
		$end = $start + $link_num; //end merupakan jml banyaknya $start dan link_num
		if ($end > $max_page){ //jika end > max page
			$end = $max_page + 1; //max page akan ditambah 1
		}
	}else {
		$end = $max_page; //kondisi lain banyaknya $end adalah sama dengan $max_page
	}
	//perulangan counter halaman
	for ($counter = $start; $counter < $end; $counter++) {
		if ($counter == $page) {
			$paging .= $counter;
		} else {
		$paging .= ' <a href="'.@$self.'?page='.$counter.'">' .$counter.'</a>';
		}
	}
	
	//*** render link next
	if ($page < $max_page) { //jika halaman > 1
		$paging.= ' <a href="' .@$self.'?page='.($page+1).'">next</a>'; //'Next' akan berisi link memajukan 1 halaman jika di klik
	} else {
		$paging.= ' next';
	}}

?>
<table border="1" cellpadding="5" cellspacing="1">
        <tr>
        	<th>#</th>
            <th width="100">NIM</th>
            <th width="150">Nama</th>
            <th>Alamat</th>
         </tr>
      	 <?php
         $i=1;
		 while($row=mysql_fetch_row($result)){?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $row[0];?></td> <!--menampilkan data pada index 0-->
									<td><?php echo $row[1];?></td> <!--menampilkan data pada index 1-->
									<td><?php echo $row[2];?></td> <!--menampilkan data pada index 2-->
								</tr>
								<?php
								$i++;
							}
							?>
						</table>
<?php
	echo $paging;
?>
</body>
</html>