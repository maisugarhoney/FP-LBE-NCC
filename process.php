<!DOCTYPE html>
<html>


<?php

include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$u_name = $conn->real_escape_string($_POST['name']); 
	$u_type = $conn->real_escape_string($_POST['type']);
    $u_species = $conn->real_escape_string($_POST['species']);
    $u_height = $conn->real_escape_string($_POST['height']);
    $u_weight = $conn->real_escape_string($_POST['weight']);
    $u_abilities = $conn->real_escape_string($_POST['abilities']);
    

    $q =$conn->query(sprintf("INSERT INTO pokedex_data(name,type,species,height,weight,abilities) VALUES ('%s','%s','%s','%s','%s','%s')",$u_name,$u_type,$u_species,$u_height,$u_weight,$u_abilities));
	//print output text
    
    echo "<h1>".$u_name."   "."Berhasil Dimasukkan Ke Database!"."</h1>";   
}
?>  

<br>
<button class = "btn" onclick="window.location.href='indextable.php';">
      Lihat Koleksi Pokemon
      <link rel="stylesheet" href='buttonstyle.css'/>
    </button>
</html>
