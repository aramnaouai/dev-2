<?php
$con=mysqli_connect("localhost","root","","bd_dev_2");
$id=$_POST["id"];

$req="select * from spectacle where idSpectacle='$id'";
$tab=mysqli_query($con,$req);
if(mysqli_num_rows($tab)==0){
    echo("Spectacle inexistant");
}else{
    $req="DELETE FROM `spectacle` WHERE idSpectacle=$id";
    $tab=mysqli_query($con,$req);
    if(mysqli_affected_rows($con)>0){
    echo("suppression avec succes");
    }

}
?>