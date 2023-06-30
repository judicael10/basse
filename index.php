<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zeuface</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="display:flex; align-items:center; justify-content:center;">
    <div class="regitres">
        
        <div class="login">
        

            <form action="" class="connecter">
                <h2><i class="fas fa-lock"></i> se connecter</h2>
                <input type="text"name="nom" required placeholder="mon">
                <input type="password" required placeholder="mot de passe">
                <button type="submit"><a href="">se conneter</a></button>
                <p class="lien">
                    vous n'aviez pas de compte?
                    <a href="inscription.php" >cree un compte</a>   
                </p>
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
