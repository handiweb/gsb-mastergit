<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];
switch ($action){
    case 'selectionnerMois':{
        $listeFichesFrais=$pdo->getFicheFraisSuivre();
		include("vues/v_listeFiches.php");
                break;
	}
    
    case 'valideChoixFiche':{
                $listeFichesFrais = $pdo->getFicheFraisSuivre();
                // On récupère le visiteur et le mois
                $dateValide = substr($_REQUEST['lstVisiteur'], 0, 6);
                $visiteur = substr($_REQUEST['lstVisiteur'], 6, strlen($_REQUEST['lstVisiteur']));
               
                // On récupère toutes les infos de la fiche du visiteur pour le mois
                $lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($visiteur, $dateValide);
                $listeVisiteur = $pdo->getNomPrenomIdVisiteur();
                $nomPrenomVisiteur = $pdo->getNomPrenomVisiteur($visiteur);
                $nbJustificatifs = $pdo->getNbjustificatifs($visiteur, $dateValide);
                $lesFraisForfait = $pdo->getLesFraisForfait($visiteur, $dateValide);
                $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($visiteur, $dateValide);
                $montantValide = $lesInfosFicheFrais['montantValide'];
                include ('vues/v_listeFiches.php');
                
                // Vérification si aucune fiche n'est retournée
                if (empty($lesInfosFicheFrais)) {
                    include ('vues/v_fichesInexistante.php');
                } else {
                    include ("v_suivreFrais.php");
                }                
         }
        
    case 'ficheRemboursee':
        $visiteur = substr($_REQUEST['lstVisiteur'], 6, strlen($_REQUEST['lstVisiteur']));
        $leMois = substr($_REQUEST['lstVisiteur'], 0, 6);
        $pdo->majEtatFicheFrais($visiteur, $leMois, 'RB');
        include ("vues/v_validerFicheHorsForfait.php");
        break;
}