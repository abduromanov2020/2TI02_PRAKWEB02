<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');

		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: 'Ubuntu', sans-serif;
		}

		body {
			background-color: #5E2750;
		}

		.wrapper {
			width: 50%;
			margin: 40px auto;
			padding: 40px 60px;
			color:white;
			border-radius: 50px;
			box-shadow: 0 0 20px rgba(44,0,30,.5);
			background-color: #77216F;
		}

		.wrapper-title {
			padding-bottom: 20px;
			text-align: center;
		}

		.wrapper .form {
			width: 100%;
		}

		.input-field {
			margin-bottom: 15px;
			display: flex;
			align-items: center;
		}

		.input-field label {
			width: 250px;
		}

		.input-field input,
		.custom-select select{
			width: 80%;
			padding: 10px 15px;
			border-radius: 50px;
			border:none;
			background-color: #2C001E;
			color: white;
		}

		.custom-select {
			position: relative;
			width: 80%;
		}
		.custom-select select {
			appearance:none;
			-webkit- appearance: none;
		}

		.custom-select select:focus {
			outline: none;
		}

		input[type=number]::-webkit-inner-spin-button {
			-webkit-appearance: none;
		}



		.input-field input:focus {
			outline: none;
		}

		.inputfield {
			display: flex;
			justify-content: center;
		}

		input[type=submit] {
			cursor: pointer;
			width: 25%;
			padding: 12px 15px;
			border-radius: 10px;
			border:none;
			background-color: #2C001E;
			color: #fff;
		*/}

		input[type=submit]:hover {	
			background-color: #b4aee8;
			color: #2C001E;
		}
		input[type=number] {
			width: 150px;
			margin-left: -55px;
		}
		input[name=nim] {
			width: 50%;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<div class="wrapper-title">
				<h1>Form Nilai Siswa</h1>
			</div>
			<div class="wrapper-content">
				<form action="array_siswa.php" class="form" method="get">
					<div class="input-field">
						<label for="">Nama Lengkap</label>
						<input type="text" name="nama" placeholder="Nama lengkap" required="">
					</div>
					<div class="input-field">
						<label for="">NIM</label>
						<input type="number" name="nim" placeholder="NIM" required="">
					</div>
					<div class="input-field">
						<label for="">Mata Kuliah</label>
						<div class="custom-select"> 
							<select name="matkul" id="" required="">
								<option value=""> -- Pilih Mata Kuliah -- </option>
								<option value="DDP">Dasar-Dasar Pemrograman</option>
								<option value="BDI">Basis Data I</option>
								<option value="WEB1">Pemrograman Web</option>
							</select>
						</div>
					</div>
					<div class="input-field">
						<label for="">Nilai UTS</label>
						<input type="number" name="uts" placeholder="Nilai UTS" required="">
					</div>
					<div class="input-field">
						<label for="">Nilai UAS</label>
						<input type="number" name="uas" placeholder="Nilai UAS" required="">
					</div>
					<div class="input-field">
						<label for="">Nilai Tugas/Praktikum</label>
						<input type="number" name="tugas" placeholder="Nilai Praktikum" required="">
					</div>
					<div class="inputfield">
						<input type="submit" name="proses" value="Simpan">
					</div>
				</form>
				<?php
				if (isset($_GET['proses'])) :
					 $proses= $_GET['proses'];
					 $nama_siswa = $_GET['nama'];
					 $mata_kuliah = $_GET['matkul'];
					 $nilai_uts = $_GET['uts'];
					 $nilai_uas = $_GET['uas'];
					 $nilai_tugas = $_GET['tugas'];
					 echo '<br/>Nama : '.$nama_siswa;
					 echo '<br/>Mata Kuliah : '.$mata_kuliah;
					 echo '<br/>Nilai UTS : '.$nilai_uts;
					 echo '<br/>Nilai UAS : '.$nilai_uas;
					 echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
				endif
 ?>
			</div>
		</div>
	</div>
</body>
</html>