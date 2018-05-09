<!DOCTYPE html>
<html>
<head>
	<title>Latihan Tabel</title>
</head>
<body>
<?php 
	$prodi =[
			[
				"id"=>0,
				"nama"=>"kimia",
				"kuota"=>"12",
				"kaprodi"=>"andi"
			],
			[
				"id"=>1,
				"nama"=>"fisika",
				"kuota"=>"14",
				"kaprodi"=>"nurhasanah"
			],
			[
				"id"=>2,
				"nama"=>"biologi",
				"kuota"=>"12",
				"kaprodi"=>"rizalinda"
			],
			[
				"id"=>3,
				"nama"=>"sisfo",
				"kuota"=>"32",
				"kaprodi"=>"ilham"
			],
			[
				"id"=>4,
				"nama"=>"kelautan",
				"kuota"=>"11",
				"kaprodi"=>"nora"
			],
			[
				"id"=>5,
				"nama"=>"statistika",
				"kuota"=>"15",
				"kaprodi"=>"naomi"
			],
			[	
				"id"=>6,
				"nama"=>"matematika",
				"kuota"=>"12",
				"kaprodi"=>"mariatul"
			],


	];

 ?>
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

