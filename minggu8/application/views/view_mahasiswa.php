<!-- Nama : </?php echo $nama; ?>
<br/>
Kelas : </?php echo $prodi; ?> -->
<!-- <?php 
// foreach($Mahasiswa as $row)
// {
// echo "Nama : ".$row['nama'];
// echo "<br/>";
// echo "Prodi : ".$row['prodi'];
// echo "<hr/>";
//}
?>
 -->
 <table border="" cellspacing="0">
	<tr>
		<td>No</td>
		<td>Prodi</td>
		<td>Keterangan</td>
	</tr>
<?php $nomer=1; foreach ($Mahasiswa as $row) {  ?>

	
	<TR>
		<td><?php echo $nomer; ?></td>
		<TD><?php  echo $row['nama'];?></TD>
		<TD><?php  echo $row['prodi'];?></TD>
	</TR>
	<?php $nomer++; ?>
<?php } ?>

</table>