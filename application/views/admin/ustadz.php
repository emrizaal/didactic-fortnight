<a href="<?=base_url()?>admin/addUstadz">Tambah</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Foto</th>
		<th>Nama</th>
		<th>Profil</th>
		<th>#</th>
	</tr>
	<tr>
	<?php 
	$no=1;
	foreach ($data as $d) {
	?>
		<td><?=$no?></td>
		<td><img src="<?=base_url()?>assets/img/foto/<?=$d['foto']?>"></td>
		<td><?=$d['nama']?></td>
		<td><?=$d['profil']?></td>
		<td></td>
	</tr>
	<?php 
	$no++;
	} 
	?>

</table>