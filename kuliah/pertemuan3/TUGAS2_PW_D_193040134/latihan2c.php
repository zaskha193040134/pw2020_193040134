<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2 Latihan 2c</title>

<style>
    .kotak{
        background-color : white;
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
        background-color : #57e65a;
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
</style>
</head>
<body>
    <!-- //petunjuk : .kotak1 dan .clear adalah kelas dari tag div -->
    <?php
    // tulis script 

       
        for( $b = 1; $b <= 5;  $b++){
            
            $k=$b;                                           
            while( $k >= 1){                                 
                echo " <div class='kotak'>#$b</div> ";       
                echo " <div class='kotak1'>$b</div> ";       
                $k--;                                                                                 
            }      
                echo "<div class='clear'></div>";            
           
        }

    ?>
</body>
</html>