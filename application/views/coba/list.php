<table>
	<tr>
		<td>nama</td>
		<td>alamat</td>
		<td colspan="2">action</td>
	</tr>
	<?php foreach ($data as $key) {?>
	<tr>
		<td><?php echo $key['nama'];?></td>
		<td><?php echo $key['alamat'];?></td>
		<td><a href="<?php echo base_url().'coba/form/'.$key['_id'];?>">update</a></td>
		<td><a href="<?php echo base_url().'coba/delete/'.$key['_id'];?>">delete</a></td>
	</tr>
	<?php }?>
</table>