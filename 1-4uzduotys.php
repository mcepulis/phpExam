<?php
//1 Uzduotis

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function even($number) {
    return $number % 2 == 0;
}
$evenNumbers = array_filter($numbers, "even");
$arraySum = array_sum($evenNumbers);
echo "Pirmos uduoties atsakymas --> " .$arraySum . PHP_EOL;

//2 Uzduotis

$numbers2 = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];


function exercises2($newNumbers2)
{
    return array_reduce($newNumbers2, function ($carry, $array) {
        foreach ($array as $number)
            $carry *= $number;
            return $carry; 
    },1);
        
}
echo "Antros uduoties atsakymas --> " . exercises2($numbers2) . PHP_EOL;

//3 Uzduotis

echo "Trecia ir ketvirta (holidayOffer.txt) uzduotys ----> " . PHP_EOL;
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

function exercises3(array $list): void
{
    $newArray = [];
    for ($i = 0; $i < count($list); $i++) {
        if (isset($list[$i]['price'])) {
            $result = [
                'destination' => $list[$i]['destination'],
                'titles' => [$list[$i]['title']],
                'total' => $list[$i]['price'] * $list[$i]['tourists']
            ];
            foreach ($list as $item) {
                if ($result['destination'] === $item['destination'] && !in_array($item['title'], $result['titles'], true)) {
                    $result['titles'][] = $item['title'];
                    $result['total'] += $item['price'] * $item['tourists'];
                }
            }
            $result['titles'] = implode(", ", $result['titles']);
            $newArray[] = $result;
        };
    };
 
    function exercises3a(array $array, mixed $key): array
    {
        $temp_array = [];
        foreach ($array as &$element) {
            if (!isset($temp_array[$element[$key]]))
                $temp_array[$element[$key]] = &$element;
        }
        $array = array_values($temp_array);
        return $array;
    }
 
    $newArray = exercises3a($newArray, 'destination');
 
    foreach ($newArray as $key => $holidays) {
        echo 'Destination ' . $holidays['destination'] . PHP_EOL;
        echo 'Titles: ' . $holidays['titles'] . PHP_EOL;
        echo 'Total: ' . $holidays['total'] . PHP_EOL;
 
        $array_keys = array_keys($newArray);
        if (end($array_keys) !== $key) {
            echo '************' . PHP_EOL;
        }
    };
    $file = 'holidayOffer.txt';
    $information = file_get_contents($file);
    $information .= json_encode($newArray);
    file_put_contents($file, $information);
}
exercises3($holidays);
