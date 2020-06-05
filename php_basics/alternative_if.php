<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternative If syntax</title>
</head>
<body>
    <h3>Greeting (ugly and usual way): </h3>
    <?php
        //Normal (ugly) way  to insert HTML code in PHP

        $hour = 12;
        $hour_alt = 21;

        if($hour < 12){
            echo "Good morning";
        }elseif($hour < 18){
            echo "Good Afternoon";
        }elseif($hour < 22){
            echo "Good evening";
        }else{
            echo "Good night";
        }
    ?>

    <h2>Alternative way of mixing HTML & PHP:</h2>
    <h3>Greeting: </h3>
    <?php if($hour_alt < 12): ?>
        <strong>Good morning</strong>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, exercitationem?</p>
    <?php elseif($hour_alt <18): ?>
        <strong>Good Afternoon</strong>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, corporis.</p>
    <?php elseif($hour_alt <22): ?>
        <strong>Good evening</strong>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, fugit!</p>
    <?php else: ?>
        <strong>Good night</strong>
        <p>Lorem ipsum dolor sit amet.</p>
    <?php endif; ?>
</body>
</html>