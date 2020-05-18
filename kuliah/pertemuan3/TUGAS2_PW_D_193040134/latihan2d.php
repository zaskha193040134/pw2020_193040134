<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 Latihan 2d</title>

<style>
    .kotak{
        /* background-color : white; */
        width :30px;
        height :30px;
        text-align : center;
        line-height : 30px;
        border : 1px solid;
        float : left;
        margin : 2px;
        color : black;
       }
    .kotak1{
        /* background-color : #57e65a; */
        width : 30px;
        height : 30px;
        text-align : center;
        line-height : 30px;
        border : 1px solid;
        float : left;
        margin : 2px;
        color : black;
    }
    .clear{
        clear:both;       
    }
    .ganjil{
        background-color : #003;
        color : #fff;
    }
    .genap{
        background-color : #57e65a;
    }
</style>
</head>
<body>
    <!-- //petunjuk : .kotak1 dan .clear adalah kelas dari tag div -->
    <?php
    // tulis script 

    $baris = 1;

    while($baris<=5){
      
        if($baris %2){
            for($kotak1=$baris; $kotak1 >=1; $kotak1--){
                echo "<div class='kotak1'>#$baris</div>";
                echo "<div class='kotak1 ganjil'>$kotak1</div>";
            }
            echo "<div class='clear'></div>";
        }else{
            for($kotak1=$baris; $kotak1 >=1; $kotak1--){
                echo "<div class='kotak1'>#$baris</div>";
                echo "<div class='kotak1 genap'>$kotak1</div>";
            }
            echo "<div class='clear'></div>";
        }


        $baris++;
    }

    ?>
</body>
</html>