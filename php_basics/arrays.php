<?php
    $colors = [
        "Blue",
        "Green",
        "White",
        "Black",
        "Orange",
        "Yellow",
        "Red",
        "Pink"
    ];
    
    var_dump($colors);

    //Example of Associative Arrays (Indicate the desire index you want it to be, they can be numbers or strings as index)
    $brands = [
        10 => "Apple",
        "Coca-cola",
        3 => "Microsoft",
        5 => "Oracle",
        "Coolest" => "Amazon"
    ];
    var_dump($brands);

    //Example of multidimentional arrays
    $articles = [
        ["title" => "First post", "content" => "This is the first post"],
        ["title" => "Second post", "content" => "This is the second post"]
    ];
    var_dump($articles);

    //Going through arrays values
    foreach ($brands as $brand) {
        echo("{$brand} ");
    }

    //Going through arrays indexes and values
    foreach ($brands as $index => $brand){
        echo("{$index}: $brand ");
    }
?>