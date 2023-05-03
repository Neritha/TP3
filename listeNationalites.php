<?php 
include "header.php";
include "connexionPdo.php";

//liste des nationalités

//construction de la requête
$texteReq="select n.num, n.libelle as 'libNation', c.libelle as 'libContinent' from nationalite n, continent c where numContinent=c.num";
if(!empty($_GET)){
    if($_GET['libelle'] != ""){ $texteReq.= " and n.libelle like '%" . $_GET['libelle'] . "%'";}
    if($_GET['continent'] != ""){ $texteReq.= " and c.num =" . $_GET['continent'];}
}
$texteReq.= " order by n.libelle;";

$req=$monPdo->prepare($texteReq);
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();

//liste des continents
$reqContinent=$monPdo->prepare("select * from continent");
$reqContinent->setFetchMode(PDO::FETCH_OBJ);
$reqContinent->execute();
$lesContinents=$reqContinent->fetchAll();

if(!empty($_SESSION['message'])){
    $mesMessages=$_SESSION['message'];
    foreach($mesMessages as $key=>$message){
        echo "<div class='container pt-5'>
            <div class='alert alert-" . $key . " alert-dismissible fade show' role='alert'>" . $message . "
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
        </div>";
    }
    $_SESSION['message']=[];
}
?>



<div class="container mt-5">
    <div class="row pt-3">
        <div class="col-9"><h2>Liste des nationalités</h2></div>
        <div class="col-3"><a href="formNationalite.php?action=Ajouter" class="btn btn-success"><i class='far fa-plus-square'></i> Créer une nationalité</a></div>
    </div>


    <!--barre de recherche-->
    <form ation="#" method="get" class="border border-primary p-3 rounded m-3">
        <div class="row">

            <div class="col">
                <input type="text" class="form-control" id="libelle" placeholder="Saisir le libellé" name="libelle" >
            </div>
            

            <div class="col">            
                <select name="continent" class="form-control">
                    <?php
                    foreach($lesContinents as $continent){
                        echo "<option value='$continent->num'>$continent->libelle</option>";
                    }
                    ?>
                </select></div>
            
            <div class="col">
                <button type="submit" class="btn btn-success btn-block">Rechercher</button>
            </div>
        </div>
    </form>
    


    <table class="table table-hover table-striped">
        <thead>
            <tr class="d-flex">
                <th scope="col" class="col-md-2">Numéro</th>
                <th scope="col" class="col-md-5">Libellé</th>
                <th scope="col" class="col-md-3">Continent</th>
                <th scope="col" class="col-md-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($lesNationalites as $nationalite){
                echo "<tr class='d-flex'>";
                    echo "<td class='col-md-2'>$nationalite->num</td>";
                    echo "<td class='col-md-5'>$nationalite->libNation</td>";
                    echo "<td class='col-md-3'>$nationalite->libContinent</td>";
                    echo "<td class='col-md-2'>
                        <a href='formNationalite.php?action=Modifier&num=$nationalite->num' class='btn btn-primary'><i class='far fa-edit'></i></a></div>
                        <a href='#modalSuppression' data-toggle='modal' data-message='Voulez-vous vraiment supprimer la nationalité $nationalite->libNation ?' data-suppression='supprimerNationalite.php?num=$nationalite->num&libelle=$nationalite->libNation' class='btn btn-danger'><i class='far fa-trash-alt'></i></a></div>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include "footer.php" ?>
