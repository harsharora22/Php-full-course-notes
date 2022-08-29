<?php
// $marks = [
//   "Harshpreet Singh"=>[
//     "Science"=>98,
//     "SST"=>96,
//     "Computer"=>99
//   ],
//   "Aman"=>[
//     "Science"=>88,
//     "SST"=>83,
//     "Computer"=>90
//   ],
//   "Komal"=>[
//     "Science"=>89,
//     "SST"=>81,
//     "Computer"=>95
//   ]
//   ];
// $newArr=array_column($marks,'Science',"Computer");
// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// array chunk

$fruits = ["Apple", "Guava", "Banana", "Lichi"];
$newArr = array_chunk($fruits, 2);
echo "<pre>";
print_r($newArr);
echo "</pre>";