<?php 
include "header.php";
include "connexionPdo.php";

$action=$_GET['action'];
$libelle=$_POST['libelle']; // libelle du formulaire (name)
$num=$_POST['num']; // num du formulaire (name)

if($action == "Modifier"){
    $req=$monPdo->prepare("update genre set libelle = :libelle where num = :num");
    $req->bindParam(':libelle', $libelle);
    $req->bindParam(':num', $num);
}else{
    $req=$monPdo->prepare("insert into genre(libelle) values(:libelle)");
    $req->bindParam(':libelle', $libelle);
}
$nb=$req->execute();
$message= $action == "Modifier" ? "modifiée" : "ajoutée"; // condition if/else en une seul ligne. ?->condition vrai , :->sinon 


if($nb == 1){
    $_SESSION['message']=["success text-center mt-4"=>"Génial! Le genre ". $libelle . " a bien été " . $message];
}else{
    $_SESSION['message']=["danger text-center mt-4"=>"Oups! Le genre ". $libelle . " n'a pas pu être " . $message];
}

header('location: listeGenres.php');
exit();
?>