<?php
    $fruits = ['apple', 'orange', 'banana'];

    // echo count($fruits);

    // search array 
    // var_dump(in_array('apples', $fruits));
    
    // add into an array
    // $fruits[] = 'grape';
    // array_push($fruits, 'strawberry', 'blueberry');
    // array_unshift($fruits, 'mango');

    // remove array
    // array_pop($fruits);
    // array_shift($fruits);
    // unset($fruits[2]);

    // print_r($fruits);

    // split into 2 chunks 
    // $chunk_array = array_chunk($fruits, 2);

    // print_r($chunk_array);
    // print_r($fruits);

    // $arr1 = [1,2,3];
    // $arr2 = [4,5,6];

    // $arr3 = array_merge($arr1,$arr2);
    // $arr4 = [...$arr1, ...$arr2];

    // print_r($arr4);

    // $a = ['celery', 'carrot', 'jackfruit'];
    // $b = ['red', 'green', 'yellow'];

    // $c = array_combine($a, $b);

    // print_r($c);

    // $keys = array_keys($c);
    // print_r($keys);

    // $flipped = array_flip($c);
    // print_r($flipped);

    $numbers = range(1, 20);
    print_r($numbers);

    // $newNumber = array_map(function($number){
    //     return "Number $number";
    // }, $numbers);

    // print_r($newNumber);

    // $lessThan10 = array_filter($numbers, fn($number) =>
    //     $number < 10);

    // print_r($lessThan10);

    $sum = array_reduce($numbers, fn($carry, $number) => 
    $carry + $number);
    
    var_dump($sum);

?>