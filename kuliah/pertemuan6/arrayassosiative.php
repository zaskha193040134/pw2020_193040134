<?php

$biodata = ["nama" => "Zaskha" , 
        "TTL" => "Jakarta, 22agustus 2001",
        "Alamat" => "Lembang",
        "Status" => "Hey there i'm using Whatsapp",
        "no.hp" => "081774129016",
        "cita-cita" => "dokter",
        "Hoby" => "Ngulik",
        "makanan" => "Udang, Bakso, Tempe",
        "Instagram" => "zaskha_07",
        "email" => "zaskha.sasmita2208@protonmail.com",
        "lagu" => "avenged"
];

print_r($biodata);

echo "<br>";
echo "<br>";

foreach($biodata as $b => $value){
    echo "$b = $value <br>";
}


echo "<br>";
echo "<br>";

echo $biodata['Status'];


?>