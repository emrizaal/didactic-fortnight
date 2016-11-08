<form action="<?=base_url()?>admin/saveUstadz" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Profil</td>
			<td>:</td>
			<td><textarea name="profil"></textarea></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="fupload"></td>
		</tr>
		<tr>
		<td></td>
		<td></td>
		<td><button type="submit">Simpan</button></td>
	</table>
</form>