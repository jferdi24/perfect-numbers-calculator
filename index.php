<?php

require_once __DIR__ . '/vendor/autoload.php';

use Jferdi24\PerfectNumbersCalculator\Calculator;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>

<body>
    <main>
        <h2>The perfect numbers less than 30 are:</h2>
        <p>
            <?php echo (implode(', ', Calculator::calculate(30))); ?>
        </p>
        <h2>The perfect numbers less than 1000 are:</h2>
        <p>
            <?php echo (implode(', ', Calculator::calculate(1000))); ?>
        </p>
        <h2>The perfect numbers less than 2000 are:</h2>
        <p>
            <?php echo (implode(', ', Calculator::calculate(2000))); ?>
        </p>
    </main>
</body>

</html>