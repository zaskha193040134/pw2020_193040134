<?php 
	$hewan = [

		 "hewan1" =>
		 ["gambar" =>"<img src='sapi.jpg'>","nama hewan"=>"sapi","Spesies" => "mamalia", "nama latin" => "Boss taurus", "jenis pemakan" => "herbivora"],

		"hewan2" =>
		 ["gambar" =>"<img src='bebek.jpg'>","nama hewan"=>"bebek","Spesies" => "unggas", "nama latin" => "anatidae", "jenis pemakan" => "omnivora"],

		 "hewan3" =>
		 ["gambar" =>"<img src='monyet.jpg'>","nama hewan"=>"monyet","Spesies" => "mamalia", "nama latin" => "Macaca fascicularis", "jenis pemakan" => "omnivora"],

		 "hewan4" =>
		 ["gambar" =>"<img src='harimau.jpg'>","nama hewan"=>"harimau","Spesies" => "mamalia", "nama latin" => "panthera tigris", "jenis pemakan" => "karnivora"],

		 "hewan5" =>
		 ["gambar" =>"<img src='lumba.jpg'>","nama hewan"=>"lumba-lumba","Spesies" => "mamalia", "nama latin" => " Delphinus capensis", "jenis pemakan" => "karnivora"],

		 "hewan6" =>
		 ["gambar" =>"<img src='domba.jpg'>","nama hewan"=>"domba","Spesies" => "mamalia", "nama latin" => "Ovis aries", "jenis pemakan" => "herbivora"],

		 "hewan7" =>
		 ["gambar" =>"<img src='ayam.jpg'>","nama hewan"=>"ayam","Spesies" => "unggas", "nama latin" => "Gallus gallus domesticus", "jenis pemakan" => "omnivora"],

		 "hewan8" =>
		 ["gambar" =>"<img src='hiu.jpg'>","nama hewan"=>"hiu","Spesies" => "mamalia", "nama latin" => "Selachimorpha", "jenis pemakan" => "karnivora"],

		 "hewan9" =>
		 ["gambar" =>"<img src='kuda.jpg'>","nama hewan"=>"kuda","Spesies" => "mamalia", "nama latin" => "Equus caballus", "jenis pemakan" => "herbivora"],

		 "hewan10" =>
		 ["gambar" =>"<img src='kalkun.jpg'>","nama hewan"=>"Kalkun","Spesies" => "unggas", "nama latin" => "Meleagris", "jenis pemakan" => "omnivora"],
		];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
	<style>
		
		img{
			width: 200px;
			height: 100px;

		}
		h2{
			text-align: center;
		}
		table{
			text-align: center;
			margin:auto;
		}
		th{
			background-color: lightgray;
		}
	</style>
</head>
<body>

		<h2>Data Hewan</h2>

		<table border="1" cellspacing="0" cellpadding="10">

			<tr>

				<th>
					Gambar
				</th>
				<th>
					nama hewan
				</th>

				<th>
					Spesies
				</th>

				<th>
					Nama latin
				</th>

				<th>
					jenis pemakan
				</th>
			</tr>



 <?php 
 		foreach ($hewan as $binatang ) {
 			
 			echo "<tr>";

 				echo "<td>".$binatang['gambar']."</td>";

 				echo "<td>".$binatang['nama hewan']."</td>";

 				echo "<td>".$binatang['Spesies']."</td>";

 				echo "<td>".$binatang['nama latin']."</td>";

 				echo "<td>".$binatang['jenis pemakan']."</td>";

 			echo "</tr>";


 		}
  ?>
</table>
  </body>
</html>