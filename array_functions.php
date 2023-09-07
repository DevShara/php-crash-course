<?php

    $fruits = ["apple", "orange", "pear"];
    $colours = ["red", "orange", "green"];

    // $fruits[] = "pineapple";
    // array_push($fruits, "mango", "banana");

    // unset($fruits[2]);
    // print_r($fruits)

    // print_r(array_flip(array_combine($fruits, $colours))); 

    $numbers = range(1,100);

    // $newNumbers = array_map(function($number){
    //     return "Number $number";
    // }, $numbers);

    // print_r($newNumbers); 

    $sum = array_reduce($numbers, function($carry, $number){
        return $carry + $number;
    });

    echo $sum;

?>