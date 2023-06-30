<?php 
try{
    $bdd= new PDO('mysql:host=localhost; dbname=gestion_de_msg','root','');
}
catch(exception $e){
    die('erreur: '.$e->getMessage());
}
    $recept=$bdd->prepare('INSERT INTO utilisateur(nom, mdp, tel) VALUE(:nom,:mdp, :tel) ' );
    if(isset($_POST['submit'])){
        $recept->execute(
            [
            ':nom'=>$_POST['nom'],
            ':mdp'=>$_POST['mdp'],
            ':tel'=>$_POST['tel'],
            ]
            );
    }
    header(
        'location:email.php'
    )
?>