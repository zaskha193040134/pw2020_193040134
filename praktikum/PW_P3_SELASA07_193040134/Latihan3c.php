<?php
function tumpukanBola($tumpukan)
{

    for ($i = 1; $i <= $tumpukan; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='row'>$i</div>";
        }
        echo "<div class='clear'></div>";
    }
}
?>

<html>

<head>
    <title>Latihan 3c</title>
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

    <?php

    tumpukanBola(5);

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