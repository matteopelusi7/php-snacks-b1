<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome
e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni
alunno. -->

<?php
 
$students = [
    [
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'voti' => [8, 7, 9]
    ],
    [
        'nome' => 'Marco',
        'cognome' => 'Verdi',
        'voti' => [5, 6, 4]
    ],
    [
        'nome' => 'Giuseppe',
        'cognome' => 'Neri',
        'voti' => [10, 4, 7]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>

<?php

        for( $i = 0; $i < count($students); $i++ ) {

            ?>

                <p> 
                    <?php 
                        echo $students[$i]['nome']; ?> <?php
                        echo $students[$i]['cognome']; ?> <?php
                        $media = array_sum($students[$i]['voti']) / count($students[$i]['voti']);
                        echo  $media;
                    ?>
                </p>
                
            <?php

        }

    ?>
    
</body>
</html>