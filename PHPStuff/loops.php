<?php
    // for($s = 0; $s <= 10; $s++){
    //     echo $s;
    // }

    // for($s = 0; $s <= 10; $s++){
    //     echo "Number" . $s . '<br>';
    // }

    // while loop
    // $a = 1;
    // while ($a <= 10) {
    //     echo  "Number" . $a . '<br>';
    //     $a = $a + 1;
    // }

    // do loop
    // $a = 1;

    // do {
    //     echo "Number" . $a . '<br>';
    //     $a++;
    // } while ($a <= 10);

    // foreach loop

    $posts = ['firstpost', 'secondpost', 'thirdpost'];

    foreach ($posts as $index => $post) {
        echo $index . '-' . $post . '<br>';
    }
?>