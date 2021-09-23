<?php
/* //!BONUS SNACK
   Passare come parametri GET name, mail e age e 
   verificare (cercando i metodi che non conosciamo 
   nella documentazione):

    1)che name sia più lungo di 3 caratteri,
    2)che mail contenga un punto e una chiocciola
    3)che age sia un numero.

    4)Se tutto è ok stampare “Accesso riuscito”,
     altrimenti “Accesso negato” 
    
    5) Personalizzare l'avviso di accesso negato con la motivazione. es: ("Accesso negato: mail non valida")
     */
include_once __DIR__ . "/inc/functions.php";

if(empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])){
    echo 'devi inserire  name, email e age';
}
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
    <div style="text-align:center;">
    <?php if(isset($email) && isset($name) && isset($age)) {?>
        <p> <?php echo chekEmail($name, $email, $age) ?></p>
   
    </div>
    <p style="color:red;text-align:center;"> <?php echo chekEmailStrict($name, $email, $age) ?></p>
    <?php  }?>
</body>

</html>