<?php
/* //!SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero
più di una volta. Stampare i numeri in pagina. 
*/
include_once __DIR__ .'/inc/functions.php';
$nums=getArrayRandNumber(15);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>
<body>
   <ul>
      <?php foreach($nums as $num) { ?>
        <li style="list-style-type: '\21C0'; padding-left:10px;"><?= $num ?></li>
        <?php } ?>
   </ul>
</body>
</html>