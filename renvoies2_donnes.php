<?php 
try{
    $bdd= new PDO('mysql:host=localhost; dbname=gestion_de_msg','root','');
}
catch(exception $e){
    die('erreur: '.$e->getMessage());
}
    $recept=$bdd->prepare('INSERT INTO utilisateur_email(pseudo, email, datee) VALUE(:pseudo,:email, :datee) ' );
    if(isset($_POST['submit'])){
        $recept->execute(
            [
            ':pseudo'=>$_POST['pseudo'],
            ':email'=>$_POST['email'],
            ':datee'=>$_POST['datee'],
            ]
            );
    }
    header(
        'location:pageww/index.html'
    )
?>