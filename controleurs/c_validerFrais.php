<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];
switch($action){
	case 'selectionnerVisiteur':{
		$lesVisiteurs=$pdo->getNomPrenomIdVisiteur();
                include("vues/v_listeVisiteurs.php");
		break;
	}
        case 'valFrais':{
                $visiteurS = $_REQUEST['lstVisiteur'];
                $mois = $_REQUEST['lstMois'];
                $infosFiche=$pdo->getLesInfosFicheFrais($visiteurS, $mois);
                $lesVisiteurs=$pdo->getNomPrenomIdVisiteur();
                $nbJustificatifs=$pdo->getNbjustificatifs($visiteurS, $mois);
                $lesFraisForfait=$pdo->getLesFraisForfait($visiteurS, $mois);
                $lesFraisHorsForfait=$pdo->getLesFraisHorsForfait($visiteurS, $mois);
                $mtntValide=$infosFiche['montantValide'];
                include ("vues/v_listeVisiteurs.php");
                if (empty($infosFiche)){
                    echo "<span style='color:red'> Pas de fiche de frais pour ce visiteur ce mois. </span>";
                }
                else {
                    include ("vues/v_valideFrais.php");
                }
        }
}
?>