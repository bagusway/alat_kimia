<?php //print_r($hasil2); ?> 
<form name="simpan_data" action="<?php echo $action;?>" method="post">
Nama : <input type="text" name="nama" >
<br>
Alamat : <input type="text" name="alamat" >
<br>
<input type="submit" name="simpan" value="Simpan Data">
</form>

<table border="1">
	<tr><td>nama :</td><td>alamat :</td></tr>
	<?php 
	foreach ($hasil2 as $row) {
		echo "<tr> <td>".$row->nama."</td><td>".$row->alamat."</td></tr>";
	}

	?>

</table>