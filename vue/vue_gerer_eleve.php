<div class="container-5">
        <a href="index.php?page=menu_admin" class="Button-3"> ⬅ Retour</a>
        <a href="index.php?page=deconnexion" class="Button-3"> Déconnexion
        <div class="card">
        <img src="images/deco.png" height="16" width="16" alt="Card Back">
        <img src="images/deco_hover.png" height="16" width="16" class="img-top" alt="Card Front">
    </div> </a>
    </div>

<body>
    <div class="container-tableau tableau-2">
    <h3 class="info-classe">Liste des élèves :</h3>
            <table>
                <tr>
                <th>Nom</th>
                    
                <th>Prénom</th>
                
                <th>Email</th>
                
                <th>Classe</th>
                
                </tr>
                <?php 
        foreach ($lesEtudiant as $unEtudiant) {
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
        <br> <br>
            
        <div class="container-2" >
            <form method="post" class="form container-2">
        <div class="form">
        <h3 class="info-classe">Ajouter un élève :</h3>

        <div class="container-10">
            <label for="Username"></label>
            <input type="text" name="classeetudiant"  placeholder="Classe" id="classeetudiant" required>
            <label for="Username"></label>
            <input type="text" name="nometudiant"  placeholder="Nom" id="nometudiant" required>
            </div>
            
            <div class="container-10">
            <label for="Username"></label>
            <input type="text" name="prenometudient"  placeholder="Prénom" id="prenometudient" required>
            <label for="Username"></label>
            <input type="text" name="pseudoetudiant"  placeholder="Identifiant" id="pseudoetudiant" required>
            </div>
          

            <div class="container-10">
            <label for="Username"></label>
            <input type="text" name="mdpetudiant"  placeholder="Mot de passe" id="mdpetudiant" required>
            <label for="Username"></label>
            <input type="text" name="emailetudiant"  placeholder="Email" id="emailetudiant" required>
            </div>

        </div>
        <div >
              <input type="submit" class="submit" name="AjouterEtudiant" value="Ajouter l'étudiant">
        </div>
    </form>
    </div>
        <br><br><br><br><br>
    </body>