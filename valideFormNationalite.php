<?php 
include "header.php";
include "connexionPdo.php";

$action=$_GET['action'];
$num=$_POST['num']; // num du formulaire (name)
$libelle=$_POST['libelle']; // libelle du formulaire (name)
$continent=$_POST['continent']; 

if($action == "Modifier"){
    $req=$monPdo->prepare("update nationalite set libelle = :libelle, numContinent= :continent where num = :num");
    $req->bindParam(':num', $num);
    $req->bindParam(':libelle', $libelle);
    $req->bindParam(':continent', $continent);
}else{
    $req=$monPdo->prepare("insert into nationalite(libelle, numContinent) values(:libelle, :continent)");
    $req->bindParam(':libelle', $libelle);
    $req->bindParam(':continent', $continent);
}
$nb=$req->execute();
$message = $action == "Modifier" ? "modifiée" : "ajoutée"; // condition if/else en une seul ligne. ?->condition vrai , :->sinon 


if($nb == 1){
    $_SESSION['message']=["success text-center mt-4"=>"Génial! La nationalité ". $libelle . " a bien été " . $message];
}else{
    $_SESSION['message']=["danger text-center mt-4"=>"Oups! La nationalité ". $libelle . " n'a pas pu être " . $message];
}

header('location: listeNationalites.php');
exit();
?>