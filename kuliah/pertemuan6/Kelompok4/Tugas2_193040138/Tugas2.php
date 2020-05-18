<?php 
	$mobil =[ 
	[
		"nama" => "Avanza",
		"no" => "D 1930 UDE",
		"tipe" => "MVP",
		"merk" => "Toyota"
	],
	[
		"foto" => "Ini Foto",
		"nama" => "Xenia",
		"no" => "D 2020 USE",
		"tipe" => "MVP",
		"merk" => "Daihatsu"
	],
		[
		"foto" => "Ini Foto",
		"nama" => "Kijang",
		"no" => "D 2030 USE",
		"tipe" => "MVP",
		"merk" => "Toyota"
	],
		[
		"foto" => "Ini Foto",
		"nama" => "Civic",
		"no" => "D 6569 UBP",
		"tipe" => "Sedan",
		"merk" => "Honda"
	],
		[
		"foto" => "Ini Foto",
		"nama" => "CRV",
		"no" => "D 1012 UT",
		"tipe" => "SUV",
		"merk" => "Honda"
	],
		[
		"foto" => "Ini Foto",
		"nama" => "Corolla",
		"no" => "D 1010 BP",
		"tipe" => "Sedan",
		"merk" => "Toyota"
	],
		[
		"foto" => "Ini Foto",
		"nama" => "Lamborghini",
		"no" => "D 1234 PU",
		"tipe" => "Sedan",
		"merk" => "Lamborghini"
	],
		[
		"foto" => "Ini Foto",
		"nama" => "Jazz",
		"no" => "D 1005",
		"tipe" => "Sedan",
		"merk" => "Honda"
	],
		[
		"foto" => "Ini Foto",
		"nama" => "Civic Type R",
		"no" => "D 1111 USA",
		"tipe" => "Sedan",
		"merk" => "Honda"
	],
		[
		"foto" => "Ini Foto",
		"nama" => "Accord",
		"no" => "D 7777 DDD",
		"tipe" => "Sedan",
		"merk" => "Honda"
	]
];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
</head>
<body>
	 <table border="1">
	 	<tr>
	 		<td>Foto</td>
	 		<td>Nama Mobil</td>
	 		<td>No Kendaraan</td>
	 		<td>Tipe Mobil</td>
	 		<td>Merk Mobil</td>
	 	</tr>
	 	<tr>
	 		<td><img src="Avanza.png" width="150" height="100"></td>
	 		<td><?php echo $mobil[0]["nama"];  ?></td>
	 		<td><?php echo $mobil[0]["no"];  ?></td>
	 		<td><?php echo $mobil[0]["tipe"];  ?></td>
	 		<td><?php echo $mobil[0]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="Xenia.png" width="150" height="100"></td>
	 		<td><?php echo $mobil[1]["nama"];  ?></td>
	 		<td><?php echo $mobil[1]["no"];  ?></td>
	 		<td><?php echo $mobil[1]["tipe"];  ?></td>
	 		<td><?php echo $mobil[1]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="kijang.jpg" width="150" height="100"></td>
	 		<td><?php echo $mobil[2]["nama"];  ?></td>
	 		<td><?php echo $mobil[2]["no"];  ?></td>
	 		<td><?php echo $mobil[2]["tipe"];  ?></td>
	 		<td><?php echo $mobil[2]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="civic.jpg" width="150" height="100"></td>
	 		<td><?php echo $mobil[3]["nama"];  ?></td>
	 		<td><?php echo $mobil[3]["no"];  ?></td>
	 		<td><?php echo $mobil[3]["tipe"];  ?></td>
	 		<td><?php echo $mobil[3]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="CRV.png" width="150" height="100"></td>
	 		<td><?php echo $mobil[4]["nama"];  ?></td>
	 		<td><?php echo $mobil[4]["no"];  ?></td>
	 		<td><?php echo $mobil[4]["tipe"];  ?></td>
	 		<td><?php echo $mobil[4]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="corolla.png" width="150" height="100"></td>
	 		<td><?php echo $mobil[5]["nama"];  ?></td>
	 		<td><?php echo $mobil[5]["no"];  ?></td>
	 		<td><?php echo $mobil[5]["tipe"];  ?></td>
	 		<td><?php echo $mobil[5]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="lamborghini.png" width="150" height="100"></td>
	 		<td><?php echo $mobil[6]["nama"];  ?></td>
	 		<td><?php echo $mobil[6]["no"];  ?></td>
	 		<td><?php echo $mobil[6]["tipe"];  ?></td>
	 		<td><?php echo $mobil[6]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="jazz.png" width="150" height="100"></td>
	 		<td><?php echo $mobil[7]["nama"];  ?></td>
	 		<td><?php echo $mobil[7]["no"];  ?></td>
	 		<td><?php echo $mobil[7]["tipe"];  ?></td>
	 		<td><?php echo $mobil[7]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="civicr.jpg" width="150" height="100"></td>
	 		<td><?php echo $mobil[8]["nama"];  ?></td>
	 		<td><?php echo $mobil[8]["no"];  ?></td>
	 		<td><?php echo $mobil[8]["tipe"];  ?></td>
	 		<td><?php echo $mobil[8]["merk"];  ?></td>
	 	</tr>
	 	<tr>
	 		<td><img src="accord.png" width="150" height="100"></td>
	 		<td><?php echo $mobil[9]["nama"];  ?></td>
	 		<td><?php echo $mobil[9]["no"];  ?></td>
	 		<td><?php echo $mobil[9]["tipe"];  ?></td>
	 		<td><?php echo $mobil[9]["merk"];  ?></td>
	 	</tr>
	 </table>
	

</body>
</html>