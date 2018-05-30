<h1>Isi Kategori</h1>

<table class="table table-bordered">
	<tr>
		<th>No</th>
		<th>Nama Kategori</th>
	</tr>

	<?php foreach ($isi_kategori as $ik) : ?> 
	<tr>
		<td><?= $ik['id_kategori']; ?></td>
		<td><?= $ik['nama_kategori']; ?></td>
	</tr>	
	<?php endforeach;?>

</table>
