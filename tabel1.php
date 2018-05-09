<!DOCTYPE html>
<html>
<head>
	<title>Latihan Tabel</title>
</head>
<body>
	<h2>Ini latihan tabel</h1>
	<table border="1";  cellpadding="2"; cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Nama Prodi</th>
		<th>Kuota</th>
		<th>Kaprodi</th>
	</tr>

<?php 
	for ($i=1; $i <=100; $i++):
			$k= $i*3;
 ?>

	<tr>
		<td><?php echo $i ?></td>
		<td>Sisfo</td>
		<td><?php echo $k ?></td>

 <?php  if ($i%2) :?>
 		<td>Ilham</td>

   <?php  else : ?>
   		<td>Renny</td>

  <?php 
  		endif;
  ?>
	</tr>
<?php 
	endfor;
 ?>
</table>

</body>
</html>

