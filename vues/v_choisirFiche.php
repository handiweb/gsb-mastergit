<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<form method="POST" action="index.php?uc=suivreFiche&action=valideChoixFiche">
 La fiche de : 
    <select name="infosUtilisateur">
        <?php 
        $lesVisiteurs = getVisiteurs();
        foreach ($lesVisiteurs as $unVisiteur) {
           $nom = $fiches['nom'];
           $prenom = $fiches['prenom'];
                   echo '<option value="'.$nom.' '.$prenom.'">'.$nom.' '.$prenom.'</option>'; 
        }
        ?>
    </select>
du mois de 
<select name="lstMois">
    <?php
    foreach ($lesMois as $unMois) {
                $mois = $unMois['mois'];
                $numAnnee = $unMois['numAnnee'];
                $numMois = $unMois['numMois'];
                if ($mois == $moisASelectionner) {
                    ?>
                    <option selected value="<?php echo $mois ?>"><?php echo $numMois . "/" . $numAnnee ?> </option>
                    <?php
                } else {
                    ?>
                    <option value="<?php echo $mois ?>"><?php echo $numMois . "/" . $numAnnee ?> </option>
                    <?php
                }
            }
            ?>
</select>
    <input id="ok" type="submit" value="Valider" size="20" />