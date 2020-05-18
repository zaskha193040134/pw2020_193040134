<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>

    <table border="1" cellspacing="0" cellpadding="10">

        <tr>
            <th></th>

            <?php

            for ($i = 1; $i <= 5; $i++) {
                echo "<th> Kolom $i </th>";
            }

            ?>
        </tr>

        <?php for ($j = 1; $j <= 5; $j++) : ?>


            <tr>

                <th>Baris<?= $j ?></th>
                <?php for ($k = 1; $k <= 5; $k++) :
                    if ($j % 2 == 0) {
                        echo "<td></td>";
                    } else {
                        echo "<td>Baris $j, Kolom $k</td>";
                    }
                endfor; ?>


            <?php endfor; ?>
            </tr>




    </table>

    <a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
            " src="../../tubes/assets/img_stock/back.png" alt=""></a>

</body>

</html>