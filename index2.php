<link rel='stylesheet' href="style.css" />
<?php
$mokiniai = [
    1 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Tomas",
        3 => "Pupelius",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
            ],
        5 => date("Y/m/d"),
    ],
    2 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Gedas",
        3 => "Traktoristas",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ],
    3 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Petras",
        3 => "Petrosius",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ],
    4 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Jonas",
        3 => "Sakalauskas",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ],
    5 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Martynas",
        3 => "Hyundai",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ],
    6 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Jurgis",
        3 => "Jurgaitis",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ],
    7 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Antanas",
        3 => "Grigaitis",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ],
    8 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Romas",
        3 => "Romunas",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ],
    9 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Giedrius",
        3 => "Giedraitis",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ],
    10 =>[
        0 => '5B',
        1 => rand(1,100),
        2 => "Marija",
        3 => "Venuole",
        4 =>[
            1=> 5,
            2=> 9,
            3=> 10
        ],
        5 => date("Y/m/d"),
    ]
];


echo "<table><tr class = 'heoo'><td>klase</td><td>kodas</td><td>vardas</td><td>pavarde</td><td>kontroliniu darbu vidurkis</td><td>duomenu formavimo data</td></tr>";

foreach($mokiniai as $item) {
    echo "<tr>";
    echo "<td>$item[0]</td>";
    echo "<td>$item[1]</td>";
    echo "<td>$item[2]</td>";
    echo "<td>$item[3]</td>";
    echo "<td>" . array_sum($item[4])/3 . "</td>";
    echo "<td>$item[5]</td></tr>";
}