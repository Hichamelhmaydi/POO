<?php
include("connc.php");
$nom =$_POST['nom'];
session_start();
$prenom =$_POST['prenom'];
$Identite=$_POST['Identite'];
// $new_nom=$_POST['new_nom'];
// $new_prenom=$_POST['new_prenom'];
// $date_res=$_POST['date_res'];

$stmt = $mysqli->prepare("INSERT INTO utilisateur (nom, prenom,identite) VALUES (?, ?,?)");
$stmt->bind_param("sss", $nom, $prenom,$Identite); 
$stmt->execute();

    $stmt1 = $mysqli->query("SELECT id_utilisateur from utilisateur where nom  = $nom and prenom =$prenom and identite = $Identite");
    $stmt1->execute();
    $result = $stmt1->fetch_assoc();
    $_SESSION["id"] = $result["id"];
    echo "Données insérées avec succès.";
    header("Location: reservation.php");
    exit;


?>