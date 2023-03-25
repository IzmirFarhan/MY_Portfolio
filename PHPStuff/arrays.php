<?php
    // simple array
    $number = [1,2,3,4,5];
    $fruit = array("Apple", "Orange", "pear");

    // var_dump($number);
    echo $fruit[0];

    // associate arrays
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    echo $colors[4];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    // echo $hex['red'];

    $person = [
        [
            'firstname' => 'elijah',
            'lastname' => 'edward',
            'email' => 'elijha.email'
        ],
            
        [
            'firstname' => 'elijah',
            'lastname' => 'edward',
            'email' => 'elijha.email'
        ],
                
        [
            'firstname' => 'elijah',
            'lastname' => 'edward',
            'email' => 'elijha.email'
        ]                         
    ];

    // echo $person[0]['email'];
    // var_dump(json_encode($person));


