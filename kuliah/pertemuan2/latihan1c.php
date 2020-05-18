<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan 1c</title>

    <style>
        .container {
            width: 190px;
            height: 190px;
            border: 1px solid black;
            padding: 15px;
        }

        .box {
            margin: 5px;
            width: 50px;
            height: 50px;
            border: 1px solid black;
            float: left;
            padding: 10px;
            box-sizing: border-box;
        }

        .c {
            clear: both;
        }
    </style>

</head>

<body>

    <?php
    $a = "A";
    $b = "B";
    $c = "C";
    ?>

    <div class="container">
        <div class="box">
            <?php echo $a; ?>
        </div>
        <div class="box">
            <?php echo $a; ?>
        </div>
        <div class="box">
            <?php echo $a; ?>
        </div>
        <div class="box">
            <?php echo $b; ?>
        </div>
        <div class="box">
            <?php echo $b; ?>
        </div>
        <div class="box c">
            <?php echo $c; ?>
        </div>
    </div>

</body>

</html>


<a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>