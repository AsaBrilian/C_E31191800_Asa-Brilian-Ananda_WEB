<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="" cellspacing="0">
	<tr>
		<td>No</td>
		<td>Prodi</td>
		<td>Keterangan</td>
	</tr>
<?php $nomer=1; foreach ($Mahasiswa as $row) {  ?>

	
	<tr>
		<td><?php echo $nomer; ?></td>
		<td><?php  echo $row['prodi'];?></td>
		<td><?php  echo $row['keterangan'];?></td>
	</tr>
	<?php $nomer++; ?>
<?php } ?>

</table>
</body>
</html>