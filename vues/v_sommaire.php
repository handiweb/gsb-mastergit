    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Connecté :<br>
                                
				<?php 
                                $typevisiteur;
                                if ($_SESSION['type']==1) {$typevisiteur = "Visiteur médical";}
                                if ($_SESSION['type']==2) {$typevisiteur = "Comptable";}
                                echo $_SESSION['prenom']."  ".$_SESSION['nom']."<br>".$typevisiteur;
                                ?>
			</li>
           <li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
           <?php
           if ($_SESSION['type']==2) { echo '
               <style>
               body{
               background-color: orange;
               }
               </style>
           <li class="smenu">
              <a href="index.php?uc=validerFrais&action=selectionnerVisiteur" title="Valider fiche de frais">Valider fiches de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=suivreFrais&action=selectionnerMois" title="Suivre le paiement fiches de frais">Suivre le paiement fiches de frais</a>
           </li>
 	    ';}
           ?>
           <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           
         </ul>
        
    </div>
    