<div id="contenu">

    <h2>Validation des frais par visiteur</h2>
    <form action="index.php?uc=validerFrais&action=valFrais" method="post">
        <label class="titre">Choisir le visiteur :</label>

        <select id="lstVisiteur" name="lstVisiteur" class="zone">
            <?php
                while ($data = $lesVisiteurs->fetch()) {
                    $idVisiteur = $data['id'];
                    $nomVisiteur = $data['nom'];
                    $prenomVisiteur = $data['prenom'];
                }
            ?>
            <option <?php if (isset($_REQUEST['lstVisiteur'])){
                if ($_REQUEST['lstVisiteur']==$idVisiteur){
                echo "selected";
                }
            }
            ?> value="<?php echo $idVisiteur; ?>"><?php echo $nomVisiteur." ".$prenomVisiteur; ?> </option>
        
        </select>

        <label class="titre">Mois :</label> 
        <select id="lstMois" name="lstMois">  
            <?php
                    $tableauMois = getSixDernierMois();
                    for ($i = 0; $i < count($tableauMois); $i++) {
                        $leMois = substr($tableauMois[$i], 4, 2);
                        $lAnnee = substr($tableauMois[$i], 0, 4);
                        ?>
                        <option value=<?php echo $tableauMois[$i]; ?>><?php echo $leMois . "/" . $lAnnee; ?></option>
                        <?php
                    }
            ?>    
        </select>   


        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
                <input id="annuler" type="reset" value="Effacer" size="20" />
            </p> 
        </div>

    </form>