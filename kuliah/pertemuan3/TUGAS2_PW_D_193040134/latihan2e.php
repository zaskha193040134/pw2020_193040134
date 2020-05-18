<!DOCTYPE html>
<html>
<head>
    <title>latihan 2e</title>
    <style>
    .kotak{
        
        /* background-color : black; */
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
        clear : both;
    }
    .black{
        background-color: black;
    }
    .white{
        background-color: white;
    }
    </style>
</head>
<body>


    <?php
    
    for($baris=1;$baris<=5;$baris++){
        
        if($baris %2){

            $kotak = 1;
            while($kotak<=5){
                if($kotak %2){
                    echo "<div class='kotak black'></div>";
                }else{
                    echo "<div class='kotak white'></div>";
                }
            $kotak++;
            }
            echo "<div class='clear'></div>";
        }else{
            $kotak = 1;
            while($kotak<=5){
                if($kotak %2){
                    echo "<div class='kotak white'></div>";
                }else{
                    echo "<div class='kotak black'></div>";
                }
            $kotak++;
            }
            echo "<div class='clear'></div>";
        }


    }

    

    ?>



    
</body>
</html>







<!-- code by : zaskha sasmita -->