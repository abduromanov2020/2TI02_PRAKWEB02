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
			
			background: #77216F;
			color: white;
		}

		.wrapper {
			padding: 0 40px;
		}

		.wrapper-title {
			text-align: center;
			padding: 40px 0;
		}

		table, tr, td, th {
			border-collapse: collapse;
			border:1px solid #fff;
		}

		td {
			background-color: #5E2750;
		}

		th {
			background:#2C001E;
		}

		td, th {
			padding: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		$ns1 = ['id'=>'Budi','nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
		$ns2 = ['id'=>'Mantul','nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
		$ns3 = ['id'=>'Tulung','nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
		$ns4 = ['id'=>'Karya','nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
		$ns5 = ['id'=>$_GET['nama'],'nim' => $_GET['nim'], 'uts' => $_GET['uts'], 'uas' => $_GET['uas'], 'tugas' => $_GET['tugas']];

		$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];

	?>
	<div class="wrapper">
		<div class="wrapper-title">
			<h3>Daftar Nilai Siswa</h3>
		</div>
		<div class="wrapper-content">
			<table width="100%" border="1">
				<thead>
					<tr>
						<th>Nama</th><th>NIM</th><th>UTS</th>
						<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($ar_nilai as $ns){
					echo '<tr><td>'.$ns['id'].'</td>';
					echo '<td>'.$ns['nim'].'</td>';
					echo '<td>'.$ns['uts'].'</td>';
					echo '<td>'.$ns['uas'].'</td>';
					echo '<td>'.$ns['tugas'].'</td>';
					$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
					echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
					echo '<tr/>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>