<?php
    // $age = 16;
    // if($age >= 18){
    //     echo "You are old enough to vote";
    // }else{
    //     echo "you need to wait until you are of age";
    // }

    // $t = 10;

    // if($t < 12){
    //     echo "Good morning";
    // }elseif($t < 17){
    //     echo "Good afternoon";
    // }else{
    //     echo "Good evening";
    // }

    $post = ['First post'];

    // if(!empty($person)){
    //     echo $person[0];
    // }else{
    //     echo "No post bro";
    // }

    // or
    
    // echo !empty($post) ? $post[0] : "Nothing here";

    // or

    // $firstPost = !empty($post) ? $post[0] : "Nothing here";
    // echo $firstPost;

    //or
    
    // $firstPost = !empty($post) ? $post[0] : null;
    // echo $firstPost;

    // or

    // $firstPost = $post[0] ?? null;
    // echo $firstPost;

    $favColor = "green";

    switch($favColor){
        case 'green':
            echo "your fav is green";
            break;
        case 'red':
            echo "your fav is red";
            break;
        case 'yellow':
            echo "your fav is yellow";
            break;
        default:
            echo "Nothing here";
            break;
    }

?>