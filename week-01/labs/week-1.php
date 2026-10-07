<?php
const PROJECT_NAME = 'week-01';
define('PROJECT_DEVELOPER', 'CCEmenike');
?>
<html>
<head>
    <title>My PHP Page</title>
</head>
<body>
    <h1>Welcome to <?= PROJECT_NAME ?></h1>
    <p>This is a simple PHP page that demonstrates basic PHP syntax and functionality.</p>
    <strong><?= "Hello, Future Engineers!: " . PROJECT_DEVELOPER ?></strong>
    <br>
    <?php
    $completed = true; //bool
    $score = 75; //int
    $price = 19.99; //float
    $greeting = "Welcome to our bank"; //string

    // To know the types
    echo gettype($completed). "<br>";
    echo gettype($score). "<br>";
    echo gettype($price). "<br>";
    echo gettype($greeting). "<br>";
    // using var_dump to know the types and values
    var_dump($completed);
    echo "<br>";
    var_dump($score);
    echo "<br>";
    var_dump($price);
    echo "<br>";
    var_dump($greeting);
    ?>
</body>
</html>