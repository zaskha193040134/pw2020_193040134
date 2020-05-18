<html>

<head>
    <title>Document</title>
</head>

<body>

    <?php
    $hardware = array("Motherboard", "Processsor", "Hard Disk", "Pc Coller", "VGA Card", "SSD");
    ?>
    <ol>
        <?php for ($i = 0; $i < count($hardware); $i++) { ?>
            <li><?php echo $hardware[$i] ?></li>
        <?php } ?>
    </ol>
    <hr>

    <ol>

        <?php
        array_push($hardware, "Card Reader", "Modem");
        for ($i = 0; $i < count($hardware); $i++) { ?>
            <li><?php echo $hardware[$i] ?></li>
        <?php } ?>

    </ol>

    <a href=".."><img style="
            width: 100px;
            height: 50px;
            position: fixed;
            top:20px;
            right:20px;
        " src="../../tubes/assets/img_stock/back.png" alt=""></a>
</body>

</html>