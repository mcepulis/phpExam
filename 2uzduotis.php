<?php
// 2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
// */

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
print_r(exercises2($numbers2));