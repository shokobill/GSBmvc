<?php
include("vues/v_sommaireC.php");

$idVisiteur = $_SESSION['idVisiteur'];
$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
$t_user = $pdo->listeFiches() ;
include("vues/v_bibliothequeFrais.php");




?>