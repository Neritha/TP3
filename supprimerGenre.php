<?php 
include "header.php";
include "connexionPdo.php";

$num=$_GET['num'];
$libelle=$_GET['libelle'];

$req=$monPdo->prepare("delete from genre where num = :num");
$req->bindParam(':num', $num);
$nb=$req->execute();

if($nb == 1){
    $_SESSION['message']=["success text-center mt-4"=>"Génial! Le genre ". $libelle . " a bien été supprimée"];
}else{
    $_SESSION['message']=["danger text-center mt-4"=>"Oups! Le genre ". $libelle . " n'a pas pu être supprimée"];
}

header('location: listeGenres.php');
exit();

?>