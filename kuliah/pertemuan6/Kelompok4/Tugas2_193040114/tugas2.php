<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>tugas2</title>
		<style type="text/css">
				
				.h1 {
					text-align: center;
					color: green;
					font-size: 55px;
					padding-bottom: 20px;
					padding-top: 20px;
					text-shadow: 3px 2px 1px grey;
					font-family: sans-serif;
				}
				.h3 {
					color: yellow;
					font-size: 20px;
					font-family: sans-serif;
					text-shadow: 3px 1px 1px green;
					text-align: center;
				}
				body {
					text-align: justify-all;
				}
				img {
					width: 150px;
				}

		</style>
</head>
	<body>
		<div class='h1'><b>PERALATAN ELEKTRONIK</b></div>

		<?php 
			$elek = [
					"brg1" => ["gambar"   => "<img src = 'foto/1.jpg'>", 
							   "harga"    => "Rp500.000,00", 
							   "merk"     => "Philps", 
							   "bahan"    => "Plastik, alumunium", 
							   "kegunaan" =>"Untuk mendinginkan makanan atau minuman, dan juga tempat untuk mengawetkan makanan atau minuman"],
					"brg2" => ["gambar" => "<img src = 'foto/2.jpg'>", 
							"harga" => "Rp450.000,00", 
							"merk" => "Sanyo", 
							"bahan" => "Plastik, alumunium",
							"kegunaan" => "Untuk teampat mengambil minum supaya lebih mudah, dan bisa juga memilih mau air panas atau dingin"],
					"brg3" => ["gambar" => "<img src = 'foto/3.jpg'>", 
							"harga" =>"Rp200.000,00", 
							"merk" => "Xslas", 
							"bahan" => "Plastik, pemotongnya besi", 
							"kegunaan" => "Untuk menghancurkan bahan-bahan makanan agar halus"],
					"brg4" => ["gambar" => "<img src = 'foto/11.jpg'>", 
							"harga" => "Rp100.000,00", 
							"merk" => "Sanyo", 
							"bahan" => "Plastik gagangnya, bawahnya alumunium penghantar panas", 
							"kegunaan" => "Untuk merapihkan pakaian"],
					"brg5" => ["gambar" => "<img src = 'foto/10.jpg'>", 
							"harga" => "Rp2.000.000,00", 
							"merk" => "Sharp", 
							"bahan" => "Plastik", 
							"kegunaan" => "Untuk mendinginkan atau memanaskan ruangan"],
					"brg6" => ["gambar" => "<img src = 'foto/6.jpg'>", 
							"harga" => "Rp1.500.000,00", 
							"merk" => "Nescafe Dolse Gusto", 
							"bahan" => "Plastik, besi", 
							"kegunaan" => "Untuk membuat kopi alami dari biji kopi secara modern menggunakan mesin"],
					"brg7" => ["gambar" => "<img src = 'foto/7.jpg'>", 
							"harga"=>"Rp850.000,00", 
							"merk"=>"Cosmos", 
							"bahan"=>"Besi di penggilingnnya, plastik", 
							"kegunaan" =>"Untuk mengadon bahan untuk membuat kue agar lebih halus dan mudah di olah"],
					"brg8"=>["gambar" => "<img src = 'foto/8.jpg'>", 
							"harga" => "Rp400.000,00", 
							"merk" => "Sunbeam", 
							"bahan" => "Besi, alumunium", 
							"kegunaan" =>"Untuk membuat roti menjadi roti bakar secara praktis"],
					"brg9" => ["gambar" => "<img src = 'foto/9.jpg'>", 
							"harga" => "Rp7.000.000,00", 
							"merk" => "Samsung", 
							"bahan" => "Kaca, plastik, besi", 
							"kegunaan" => "Untuk menonton siaran-siaran yang ditayangkan"],
					"brg10" =>["gambar" =>"<img src = 'foto/12.jpg'>", 
							"harga" => "Rp3.000.000,00", 
							"merk" => "Cosmos", 
							"bahan" => "Plastik", 
							"kegunaan" =>"Untuk memudahkan mencuci pakaian dan bisa untuk mengeringkan pakaian yang sudah dicuci"]
			
			];

			 ?>
			<table border="1" cellspacing="0" cellpadding="10">
	
					<tr bgcolor="blue">
						<td><div class='h3'>Gambar</div></td>
						<td><div class='h3'>Harga Barang</div></td>
						<td><div class='h3'>Merk Barang</div></td>
						<td><div class='h3'>Bahan</div></td>
						<td><div class='h3'>Kegunaan</div></td>
					</div>
					</tr>
					<?php
							foreach ($elek as $x) {
								echo "<tr bgcolor='lightblue'>";
							        echo    "<td>".$x["gambar"]."</td>";
							        echo    "<td>".$x["harga"]."</td>";
							        echo    "<td>".$x["merk"]."</td>";
							        echo    "<td>".$x["bahan"]."</td>";
							        echo    "<td>".$x["kegunaan"]."</td>";
						        echo "</tr>";
							}



					?>
					
					
		</table>
		
	</body>
</html>

		