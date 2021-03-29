<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="" cellspacing="0">
	<tr>
		<td>No</td>
		<td>Tahun</td>
	</tr>
<?php $nomer=1; foreach ($Mahasiswa as $row) {  ?>

	
	<TR>
		<td><?php echo $nomer; ?></td>
		<TD><?php  echo $row['tahun'];?></TD>
	
	</TR>
	<?php $nomer++; ?>
<?php } ?>

</table>
</body>
</html>