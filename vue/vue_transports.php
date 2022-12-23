<div class="container-5">
        <a href="index.php?page=menu_etudiant" class="Button-3"> ⬅ Retour</a>
        <a href="index.php?page=deconnexion" class="Button-3"> Déconnexion
        <div class="card">
        <img src="images/deco.png" height="16" width="16" alt="Card Back">
        <img src="images/deco_hover.png" height="16" width="16" class="img-top" alt="Card Front">
    </div> </a>
    </div>

    <div class="container-9">
        <div class="form-5">
            <form  method="post" class="">
                    <div class="auth-3">RER</div>
                    <select name="IDM" id="IDM" class="choix">
                        <?php
                        foreach($lesRers as $unRer)
                        {
                            echo "<option value='".$unRer['IDM']."'>"; 
                            echo $unRer['NOMM']; 
                            echo "</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" class="Ajouter" value="Ajouter"  name="AjouterMoyen"></Button>
                    <input type="submit" class="Supprimer" value="Supprimer"></Button>
            </form>

            <form  method="post" class="">
                    <div class="auth-4">METRO</div>
                    <select name="IDM" id="IDM" class="choix">
                        <?php
                        foreach($lesMetros as $unMetro)
                        {
                            echo "<option value='".$unMetro['IDM']."'>"; 
                            echo $unMetro['NOMM']; 
                            echo "</option>";
                        }
                        ?>
                    </select>
                        <input type="submit" class="Ajouter" value="Ajouter" name="AjouterMoyen"></Button>
                        <input type="submit" class="Supprimer" value="Supprimer"></Button>
            </form>
                    
        </div>

        <div class="form-5">
        <table class="tableau-3">
            <tr>
                    <td><b> Moyen</b></td> <td><b> Catégorie</b> </td> <td><b> Année </b></td> 
                    </tr>
        <?php
         foreach($lesTransports as $unTransport)
                        {
                            echo "<tr> <td> ".$unTransport['NOMM']."</td> 
                            <td> ".$unTransport['LIBELLECAT']."</td>
                            <td> ".$unTransport['annee']."</td></tr>";
                        }
                        ?>
            </table>
        </div>
    </div>