<?php
$con=mysqli_connect("localhost","root","","bd_dev_2");
$id=$_POST["spectacle"];
$date=$_POST["date"];
$salle=$_POST["salle"];

$req="select * from spectacle where idSpectacle='$id'";
$tab=mysqli_query($con,$req);
if(mysqli_num_rows($tab)==0){
    echo("Spectacle inexistant");
}else{
    if($salle !=0){
        $req="UPDATE `spectacle` SET `DateSpectacle`='$date',`idSalle`='$salle' where idSpectacle='$id'";
        $tab=mysqli_query($con,$req);

    }
    else{
        $req="UPDATE `spectacle` SET `DateSpectacle`='$date' where idSpectacle='$id'";
        $tab=mysqli_query($con,$req);
    }
    if(mysqli_affected_rows($con)>0){
        echo("Modification avec succes");
    }
}
?>