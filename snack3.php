<?php
/* //!BONUS SNACK
   Passare come parametri GET name, mail e age e 
   verificare (cercando i metodi che non conosciamo 
   nella documentazione):

    1)che name sia più lungo di 3 caratteri,
    2)che mail contenga un punto e una chiocciola
    3)che age sia un numero.

    4)Se tutto è ok stampare “Accesso riuscito”,
     altrimenti “Accesso negato” */
include_once __DIR__ . "/inc/functions.php";

$name= $_GET['name'];
$email= $_GET['email'];
$age= $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    <div style="height:50px; width:100%; border: 2px solid #ddd;text-align:center;">
        <p> <?php echo chekEmail($name,$email,$age) ?></p>
    </div>
</body>
</html>