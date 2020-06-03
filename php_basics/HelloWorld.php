<?php
    $message = "it's just a joke!";
    $count = 3;
    $price = 3.50;
    $is_admin = true;
    $data = null;

    echo "Hello world, 2020 please do not kill me... ";
    echo $message . "<br>";
    var_dump($count , $price, $is_admin, $data);

    //Example of type juggling
    $cows = "210";
    $corn = 3;
    var_dump($cows * $corn);

    //Example of Variable interpolation (You do not need a dot to concatenate)
    $user = "José";
    $warning = "you should not be here!";
    echo "{$user}, {$warning}";
?>