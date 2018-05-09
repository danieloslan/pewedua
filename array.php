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
	echo "<p>NAMA PRODI<p>";
	echo "";
	echo $prodi[0]["nama"];
	echo "<br>";
	echo $prodi[1]["nama"];
	echo "<br>";
	echo $prodi[2]["nama"];
	echo "<br>";
	echo $prodi[3]["nama"];
	echo "<br>";
	echo $prodi[4]["nama"];
	echo "<br>";
	echo $prodi[5]["nama"];
	echo "<br>";
	echo $prodi[6]["nama"];
	echo "<br>";

	echo "<pre>";
	var_dump($prodi);
	echo "</pre>";

 ?>