<style>
    table{
        width:100%;
        border-collapse:collapse;
    }
    th{background-color:yellow;text-align:center;}
    td{background-color:gold;text-align:center;}
</style>

<?php
$con=mysqli_connect("localhost","root","","bd_dev_2");
$req="select idSpectacle , Titre , Libelle , DateSpectacle 
from spectacle sp,  salle s,  piece p  
where p.idPiece = sp.idPiece and s.idSalle = sp.idSalle order by(DateSpectacle)"

;
$tab=mysqli_query($con,$req);
if(mysqli_num_rows($tab)>0){
    echo" <table>";
    echo"<tr>
            <th>spectacle</th>
            <th>titre</th>
            <th>libelle</th>
            <th>date du spectacle</th>" ;
    while($ligne=mysqli_fetch_array($tab)){

        echo"<tr>
            <td>$ligne[0]</td>
            <td>$ligne[1]</td>
            <td>$ligne[2]</td>
            <td>$ligne[3]</td>
        </tr>";
    }
    echo"</table>";
     

}


    
?>