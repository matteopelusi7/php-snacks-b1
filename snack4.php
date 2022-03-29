<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso
numero più di una volta -->

<?php

$num = 15;
$array = [];

while ( count($array) < $num ) {
    $number = rand(1, 100);

    if ( !in_array($number, $array) ) {
        $array[] = $number;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>

    <?php

        for ( $i = 0; $i < count($array); $i++ ) {
            ?>
                <div>
                    <?php echo $array[$i] ?>
                </div>
            <?php
        }

    ?>
    
</body>
</html>