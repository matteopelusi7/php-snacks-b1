<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà
una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra
ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
    [
        'casa' => 'Basket Milano',
        'ospite' => 'Basket Roma',
        'punti_casa' => 45,
        'punti_ospite' => 21,
    ],
    [
        'casa' => 'Basket Bologna',
        'ospite' => 'Basket Torino',
        'punti_casa' => 87,
        'punti_ospite' => 67,
    ],
    [
        'casa' => 'Basket Pescara',
        'ospite' => 'Basket Roma',
        'punti_casa' => 82,
        'punti_ospite' => 85,
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

    <?php

        for( $i = 0; $i < count($partite); $i++ ) {

            ?>

                <div> 
                    <?php 
                        echo $partite[$i]['casa'];
                    ?>
                    -
                    <?php 
                        echo $partite[$i]['ospite'];
                    ?>
                    |
                    <?php 
                        echo $partite[$i]['punti_casa'];
                    ?>
                    -
                    <?php 
                        echo $partite[$i]['punti_ospite'];
                    ?>
                </div>
                
            <?php

        }

    ?>
    
</body>
</html>