<div class="container-5">
        <a href="index.php?page=menu_etudiant" class="Button-3"> ⬅ Retour</a>
        <a href="index.php?page=deconnexion" class="Button-3"> Déconnexion
        <div class="card">
        <img src="images/deco.png" height="16" width="16" alt="Card Back">
        <img src="images/deco_hover.png" height="16" width="16" class="img-top" alt="Card Front">
    </div> </a>
    </div>

<body>
<div class="container-tableau">
<h3 class="info-eleve">Vos informations:</h3>
            <table class="tableau-1">
                <tr>
                <th>Nom</th>
                    
                <th>Prénom</th>
                
                <th>Login</th>
                
                <th>Mot de passe</th>

                <th>Email</th>

                <th>Classe</th>

                <th>Diplôme visé</th>

                <th>Salle</th>
                
                </tr>
                <?php 
                echo "<tr>  
                <td> ".$lEtudiant['NOME']."</td>
                <td> ".$lEtudiant['PRENOME']."</td>
                <td> ".$lEtudiant['LOGINE']."</td>
                <td> ".$lEtudiant['MDPE']."</td>
                <td> ".$lEtudiant['EMAILE']."</td>
                <td> ".$laClasse['NOMC']."</td>
                <td> ".$laClasse['DIPLOMEC']."</td>
                <td> ".$laClasse['SALLEC']."</td>
               
                </tr>";
        ?>
            </table>
        </div>


    <div class="container-tableau tableau-2">
    <h3 class="info-classe">Informations de la classe :</h3>
            <table>
                <tr>
                <th>Nom</th>
                    
                <th>Prénom</th>
                
                <th>Email</th>
                
                <th>Classe</th>
                
                </tr>
                <?php 
        foreach ($lesEtudiants as $unEtudiant) {
                echo "<tr>  
                <td> ".$unEtudiant['NOME']."</td> 
                <td> ".$unEtudiant['PRENOME']."</td>
                <td> ".$unEtudiant['EMAILE']."</td>
                <td> ".$unEtudiant['IDC']."</td>
                </tr>";
        }
        ?>
            </table>
        </div>
    </body>