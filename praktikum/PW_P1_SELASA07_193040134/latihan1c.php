<!DOCTYPE html>
<html>

<head>
	<title>latihan 3</title>
</head>

<body>
	<style>
		.lingkaran {
			border: 1px solid black;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			margin-right: 10px;
			margin-bottom: 10px;
			text-align: center;
			line-height: 50px;
			float: left;
			background-color: salmon;
		}

		.clear {
			clear: both;
		}
	</style>
	<?php

	$a = "A";
	$b = "B";
	$c = "C";

	?>

	<div>

		<div class="lingkaran"><?php echo $a ?></div>
		<div class="clear"></div>



		<div class="lingkaran"><?php echo "$b" ?></div>
		<div class="lingkaran"><?php echo "$b" ?></div>
		<div class="clear"></div>



		<div class="lingkaran"><?php echo "$c" ?></div>
		<div class="lingkaran"><?php echo "$c" ?></div>
		<div class="lingkaran"><?php echo "$c" ?></div>
		<div class="clear"></div>


	</div>

	<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../tubes/assets/img_stock/back.png" alt=""></a>

</body>

</html>