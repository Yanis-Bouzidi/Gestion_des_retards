<div class="container-5">
        <a href="index.php?page=menu_etudiant" class="Button-3"> ⬅ Retour</a>
        <a href="index.php?page=deconnexion" class="Button-3"> Déconnexion
        <div class="card">
        <img src="images/deco.png" height="16" width="16" alt="Card Back">
        <img src="images/deco_hover.png" height="16" width="16" class="img-top" alt="Card Front">
    </div> </a>
    </div>
    <div class="container-4">
    <nav>
        <h3>Retards:</h3>
        <ul class="liste">
        <?php 
  foreach ($lesRetards as $unRetard) {
    echo "<li>";
    echo "".$unRetard['DATE']." | ";
    echo " ".$unRetard['HEURE']."  |  ";
    echo " ".$unRetard['DUREE'];
    echo " minutes.";
    echo "</li>";
  }
  echo "</ul>";
?>

    </nav>
    </div>