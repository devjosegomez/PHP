<?php 
    $articles = 
    [
        [
            "title" => "Shrek 3 was the best movie of a generation",
            "content" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, pariatur!"
        ],
        
        [
            "title" => "Google was sued for sending private data",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, veritatis! In error vero vel minus."
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <header>
        <h1>Last posts</h1>
    </header>
    <main>
        <ul>
            <?php foreach ( $articles as $article ) : ?>
                <li>
                    <article>
                        <h2> <?= $article["title"];   ?> </h2>
                         <p> <?= $article["content"]; ?> </p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>

</body>
</html>