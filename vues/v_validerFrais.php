<div style="clear:left;"><h2>Frais au forfait </h2></div>
        <table style="color:white;" border="1">
                <tr><th>Repas midi</th><th>Nuitée </th><th>Etape</th><th>Km </th><th>Situation</th></tr>

                <?php
                foreach (  $lesFraisForfait as $unFraisForfait  ) 
                {
                    $quantite = $unFraisForfait['quantite'];
                    echo '
                    <tr align="center">
                        <td width="80"> <input type="text" size="3" name="etape" value="'.$quantite.'"/></td>
                        <td width="80"> <input type="text" size="3" name="km" value="'.$quantite.'"/></td>
                        <td width="80"><input type="text" size="3" name="nuitee" value="'.$quantite.'"/></td> 
                        <td width="80" ><input type="text" size="3" name="repas" value="'.$quantite.'"/></td>
                            <td width="80"> 
                                    <select name="situ">
                                            <option value="E">Enregistré</option>
                                            <option value="V">Validé</option>
                                            <option value="R">Remboursé</option>
                                    </select></td>
                </tr>'; } ?> 

        </table>

        <p class="titre" /><div style="clear:left;"><h2>Hors Forfait</h2></div>             
        <table style="color:white;" border="1">               
                <tr><th>Date</th><th>Libellé </th><th>Montant</th><th>Situation</th></tr>

                <?php      
                    foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) {
                            $date = $unFraisHorsForfait['date'];
                            $libelle = $unFraisHorsForfait['libelle'];
                            $montant = $unFraisHorsForfait['montant'];

                        echo'<tr align="center"><td width="100" ><input type="text" size="12" name="hfDate1" value="'.$date.'"/></td>
                        <td width="100"><input type="text" size="10" name="hfLib1" value="'.$libelle.'"/></td> 
                        <td width="90"> <input type="text" size="10" name="hfMont1" value="'.$montant.'"/></td>
                        <td width="80"> 
                                <select name="hfSitu1">
                                        <option value="E">Enregistré</option>
                                        <option value="V">Validé</option>
                                        <option value="R">Remboursé</option>
                                </select></td>
                        </tr>';

                    }
                ?>

        </table>		
        <p class="titre"></p>
        <div class="titre">Nb Justificatifs</div><input type="text" class="zone" size="4" name="hcMontant"/>		
        <p class="titre" /><label class="titre">&nbsp;</label><input class="zone"type="reset" /><input class="zone"type="submit" />
 