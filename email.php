<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zeuface</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
    <div class="regitres">
        <div class="login">
            <form action="renvoies2_donnes.php" method="post" class="regi">
                <h2><i class="fas fa-lock"></i>incription</h2>

    

                <input type="text" name="pseudo" required  placeholder="pseudo">
                <input type="email" name="email"required placeholder="email" >
                <input type="date" name="datee" required  placeholder="date de naissance">

                <button type="submit" name="submit"> continue </button>
            </form>
        </div>
    </div>
</body>
</html>

<?php 
try{
    $bdd= new PDO('mysql:host=localhost; dbname=gestion_de_msg','root','');
}
catch(exception $e){
    die('erreur: '.$e->getMessage());
}
 ?>
