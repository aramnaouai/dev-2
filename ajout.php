<?php
$con=mysqli_connect("localhost","root","","bd_dev_2");
$d=$_POST["d"];
$salle=$_POST["salle"];
$piece=$_POST["piece"];
$req="select * from spectacle where idSalle='$salle' and DateSpectacle='$d'";
$tab=mysqli_query($con,$req);
if(mysqli_num_rows($tab)>0){
    echo("salle non disponible");
}
else{
    $req="select * from spectacle where idPiece=$piece and DateSpectacle='$d'";
    $tab=mysqli_query($con,$req);
    if(mysqli_num_rows($tab)>0){
        echo("piece deja programmée");
    }
    else{
        $req="INSERT INTO `spectacle`(`idPiece`, `DateSpectacle`, `idSalle`) VALUES ('$piece','$d','$salle')";
        $tab=mysqli_query($con,$req);
        if(mysqli_affected_rows($con)>0){
            echo("ajoutée avec succes");
        }
    }

}
?>