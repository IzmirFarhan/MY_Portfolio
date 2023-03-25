<?php
    // function registerUser($email){
    //     echo $email . 'register';
    // }

    // registerUser("Farhan");

    // function sum($n1, $n2){
    //     return $n1 + $n2;
    // }

    // $number = sum(1,3);

    // echo $number;

    $subtraction = function($n1, $n2){
        return $n1 - $n2;
    };

    // echo $subtraction(50, 12);

    $multiplication = fn($n1, $n2) => $n1 * $n2;

    echo $multiplication(1,4);
?>