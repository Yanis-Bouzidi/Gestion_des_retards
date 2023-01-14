<body>
    <div class="container-5">
        <a href="index.php?page=deconnexion" class="Button-3"> ⬅ Retour</a>
        <a href="index.php?page=deconnexion" class="Button-3"> Déconnexion
        <div class="card">
        <img src="images/deco.png" height="16" width="16" alt="Card Back">
        <img src="images/deco_hover.png" height="16" width="16" class="img-top" alt="Card Front">
    </div> </a>
    </div>

    <h6>
        <?php
            echo "Bienvenue ";
            echo $_SESSION["prenom"];
            echo " ";
            echo $_SESSION["nom"];
            echo ". ";
            echo "Vous êtes connecté en tant qu'";
            echo $_SESSION["role"];
            echo "."
        ?>
    </h6>
    <h2>Sélectionnez une option:</h2>
    <div class="container-3">
        <a href="index.php?page=gerer" class="Button-2">Gérer les élève</a>
        <a href="index.php?page=flux" name="flux" class="Button-2">Flux RSS</a>
        <a href="index.php?page=gerer_eleve" class="Button-2" >Billets de retards</a>
    </div>
</body>