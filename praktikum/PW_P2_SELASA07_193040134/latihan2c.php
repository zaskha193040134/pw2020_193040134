<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .row {
            width: 40px;
            height: 40px;
            border: 1px solid black;
            text-align: center;
            line-height: 40px;
            background-color: salmon;
            border-radius: 50%;
            margin: 5px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='row'>$i</div>";
        }
        echo "<div class='clear'></div>";
    }
    ?>


    <a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../tubes/assets/img_stock/back.png" alt=""></a>

</body>

</html>