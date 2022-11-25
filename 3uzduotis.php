<?php
// 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
//  Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
//  Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
// */

// //   Destination "Paris".
// //   Titles: "Romantic Paris", "Hidden Paris"
// //   Total: 99500
// //   ************
// //   Destination "New York"

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

// var_dump($holidays[1]['destination']);

// $keys = array_keys($holidays);
// for($i = 0; $i < count($holidays); $i++) {
//     echo $keys[$i] . "{<br>";
//      foreach($holidays[$keys[$i]] as $key => $value) {
//          echo $key . " : " . $value . "<br>";
//      }
//     echo "}<br>";
//  }
$keys = array_keys($holidays);
for($i = 0; $i < count($holidays); $i++) {
 foreach($holidays[$keys[$i]] as $key => $value) {
    echo $key . " : " . $value . PHP_EOL;
}
}
function exercises3()
{

}
