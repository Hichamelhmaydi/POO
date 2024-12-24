<?php
include("connc.php");
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$prenom =$_POST['prenom'];
$Identite=$_POST['Identite'];
// $new_nom=$_POST['new_nom'];
// $new_prenom=$_POST['new_prenom'];
// $date_res=$_POST['date_res'];

$stmt = $mysqli->prepare("INSERT INTO utilisateur (nom, prenom,identite) VALUES (?, ?,?)");
$stmt->bind_param("sss", $nom, $prenom,$Identite); 
if ($stmt->execute()) {
    echo "Données insérées avec succès.";
    header("Location: reservation.php");
    exit;
} 
$stmt->close();
?>