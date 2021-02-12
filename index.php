<?php

$studentai =[
    '1c'=>[
        'pogrupis1' =>[
            1 => "Petras",
            2 => "Jonas",
            3 => "Ieva"
        ]

    ],
    '2c'=>[
        'pogrupis2' =>[
            1 => "Karolis",
            2 => "Tomas",
            3 => "Simas"
        ]
    ]
];

foreach ($studentai as  $key => $item){
    echo "$key:<br>";
   foreach($item as $data => $val){
       echo "$data:<br>";
       foreach($val as $lok){
           echo "$lok<br>";
       }
   }
}