<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak1 {
            width: 20px;
            height: 20px;
            border: 1px solid black;
            background-color: salmon;
            margin: 5px;
            float: left;
        }

        .kotak2 {
            width: 20px;
            height: 20px;
            border: 1px solid black;
            background-color: lightblue;
            margin: 5px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php

    for ($j = 1; $j <= 6; $j++) {

        for ($i = 1; $i <= 6; $i++) {


            if ($j % 2 == 0) {

                if ($i % 2 == 0) {
                    echo "<div class='kotak1'></div>";
                } else {
                    echo "<div class='kotak2'></div>";
                }
            } else {
                if ($i % 2 == 0) {
                    echo "<div class='kotak2'></div>";
                } else {
                    echo "<div class='kotak1'></div>";
                }
            }
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