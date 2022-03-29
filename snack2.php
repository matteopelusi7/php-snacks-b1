<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso
negato” -->

<?php

if ( isset( $_GET['name'] ) && isset( $_GET['mail'] ) && isset( $_GET['age'] )) {

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

} else {
    echo 'Inserisci i parametri';
}

$ver_mail = strpos($mail, '.', -4);
$ver_mail2 = strpos($mail, '@');
$ver_name = strlen($name);
$ver_age = is_numeric($age);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>

    <?php

        if ( $ver_mail && $ver_mail2  &&  $ver_name > 3  &&  $ver_age ) {
            ?>
                <p>Accesso consentito</p>
            <?php
        } else {
            ?>
                <p>Accesso negato</p>
            <?php
        }

    ?>
    
</body>
</html>