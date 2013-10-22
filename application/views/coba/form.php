<form method="post" action="<?php echo base_url()."coba/".$url;?>">
	<table>
		<tr><td>nama</td><td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td></tr>
		<tr><td>alamat</td><td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td></tr>
		<tr><td colspan="2"><input type="submit"</td></tr>
	</table>
</form>