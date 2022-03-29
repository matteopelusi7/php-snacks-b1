<!-- Stampiamo il nostro array mettendo gli
insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>

        .gray {
            border: 2px solid gray;
            width: 300px;
        }
        
        .green {
            border: 2px solid green;
            width: 300px;
        }
        
        ul {
            list-style: none;
        }

    </style>
</head>
<body>

    <?php

        for( $i = 0; $i < count($db['teachers']); $i++ ) {

            ?>
                <ul class="gray">
                    <li> 
                        <?php 
                            echo $db['teachers'][$i]['name'];
                        ?>
                    </li>
                    <li> 
                        <?php 
                            echo $db['teachers'][$i]['lastname'];
                        ?>
                    </li>
                </ul>
                
            <?php

        }

        for( $i = 0; $i < count($db['pm']); $i++ ) {

            ?>
                <ul class="green">
                    <li> 
                        <?php 
                            echo $db['pm'][$i]['name'];
                        ?>
                    </li>
                    <li> 
                        <?php 
                            echo $db['pm'][$i]['lastname'];
                        ?>
                    </li>
                </ul>
                
            <?php

        }

    ?>
    
</body>
</html>