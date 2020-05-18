<html>
<head>
    <title>Document</title>
</head>
<body>
    
<?php
    $hardware = array("Motherboard" , "Processsor" , "Hard Disk" , "Pc Coller" , "VGA Card" , "SSD");
?>
    <ol>
<?php     for($i = 0; $i < count($hardware); $i++){?>
        <li><?php echo $hardware[$i]?></li>
<?php }?>
    </ol>
<hr>

<ol>

<?php
     array_push($hardware, "Card Reader" , "Modem");
     for($i = 0; $i < count($hardware); $i++){?>
        <li><?php echo $hardware[$i]?></li>
<?php }?>

    </ol>
                                    

</body>
</html>