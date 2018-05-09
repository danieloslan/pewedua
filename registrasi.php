<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
<?php 

	$kabupaten [
				[
					"id"=>1,
					"nama_kab"=>"Pontianak"

				],
				[
					"id"=>2,
					"nama_kab"=>"Mempawah"

				],
				[
					"id"=>3,
					"nama_kab"=>"Singkawang"

				]

	];

 ?>
<h1>Registrasi Calon Mahasiswa Baru</h1>
<form method="post" action="proses.php">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>
				<input type="text" name="username">
			</td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td>
				<input type="Password" name="password">
			</td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>

		<tr>
			<td>Nomor Hp</td>
			<td>:</td>
			<td>
				<input type="number" name="nomorhp">
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<textarea name="alamat">Isi ALamat Anda Disini</textarea>
			</td>
		</tr>

		<tr>
			<td>Kabupaten</td>
			<td>:</td>
			<td>
				<select name="kabupaten">
					<?php foreach ($kabupaten as $kab): ?>
					<option value="<?= $kab["id"]; ?>">
						<?= $kab ["nama_kab"]; ?>
					</option>

				<?php endforeach ?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jeniskelamin" value="0"> Pria
				<input type="radio" name="jeniskelamin" value="1"> Wanita
			</td>
		</tr>

		<?php 
		foreach ($kabupaten as $kab => $value) {
			# code...
		}

		 ?>
		<tr>
			<td>Prodi Pilihan</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="prodipilihan"> Sistem Informasi<br>
				<input type="checkbox" name="prodipilihan"> Sistem Komputer<br>
				<input type="checkbox" name="prodipilihan"> Informatika<br>
			</td>
		</tr>

		<tr>
			<td>
				<input type="submit" name="submit" value="simpan">
			</td>
		</tr>
	</table>
</form>

</body>
</html>