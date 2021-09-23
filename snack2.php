<?php
/* //! SNACK 2
    Creare un array contenente qualche alunno di un’ipotetica classe.
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti
    scolastici (senza, materia, solo numeri). Creare una funzione che
    calcoli la media voto di un alunno.

    Stampare Nome, Cognome e la media dei voti di ogni alunno.
 */
include_once __DIR__ . "/inc/data/data.php";
include_once __DIR__ . "/inc/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <ul>
        <?php foreach($students as $student) {?>
            <li style="list-style-type: none;">
            <?php echo $student['name'] . ' '. $student['surname']. ' media: ' ?> 
            <?php echo getMedia($student['voti']) ?>
            </li>
        <?php }?>
        </ul>
</body>
</html>