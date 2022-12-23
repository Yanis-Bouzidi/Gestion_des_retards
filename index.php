<?php
	session_start(); 
	require_once("controleur/controleur.class.php"); 
	//instanciation de la classe Controleur
	$unControleur = new Controleur(); 
?>

<!DOCTYPE html>
<html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Accueil</title>
          <link rel="stylesheet" href="css/style.css" />
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
        </head>

<header>
        <div class="header">
            <h1>
                Plateforme de Gestion des Retards
            </h1>
         </div>
    <a href="index.php?page=deconnexion">
        <img src="images/logo.png" alt="logo" class="logo">
    </a>
</header>

<body>
    
    <?php 
    
        if (!isset($_SESSION['login'])){
			require_once ("vue/authentification.php") ;
		}
        
		if (isset($_POST['connexionAdmin']))
		{
           
			$login = $_POST['username']; 
			$mdp = $_POST['password']; 
            
			$unUser = $unControleur->verifConnexion("administrateur",$login, $mdp);
			if ($unUser == null ){
				echo " Vérifier vos identifiants";
			}else{
				$_SESSION['login'] = $unUser['LOGINA']; 
				$_SESSION['role'] = "admin"; 
                $_SESSION['nom'] = $unUser["NOMA"];
                $_SESSION['prenom'] = $unUser["PRENOMA"];
                
				header("Location: index.php?page=menu_admin");
			}
		}
        if (isset($_POST['connexionEtudiant']))
		{
			$login = $_POST['username']; 
			$mdp = $_POST['password']; 
            
			$unUser = $unControleur->verifConnexion("etudiant", $login, $mdp);
			if ($unUser == null ){
				echo " Vérifier vos identifiants";
			}else{
				$_SESSION['login'] = $unUser['LOGINE']; 
				$_SESSION['role'] = "etudiant"; 
                $_SESSION['nom'] = $unUser["NOME"];
                $_SESSION['prenom'] = $unUser["PRENOME"];
                $_SESSION['idc'] = $unUser["IDC"];
                $_SESSION['ide'] = $unUser["IDE"];
                $_SESSION['idr'] = $unUser["IDE"];
				header("Location: index.php?page=menu_etudiant");
			}
		}

    if (isset($_SESSION['login']) )
	{
        $page =""; 
        if (isset($_GET['page'])){
            $page = $_GET['page']; 
        }else {
           $page =""; 
        }
        switch ($page){
            case "menu_admin": if ($_SESSION['role'] == 'admin') require_once("vue/menu_admin.php"); break; 
            case "menu_etudiant": if ($_SESSION['role'] == 'etudiant') require_once("vue/menu_etudiant.php"); break; 
            case "information": if ($_SESSION['role'] == 'etudiant') require_once("informations.php"); break;
            case "retards": if ($_SESSION['role'] == 'etudiant') require_once("retards_et_billets.php"); break;
            case "transports": if ($_SESSION['role'] == 'etudiant') require_once("transports.php"); break;
            case "flux": if ($_SESSION['role'] == 'admin') require_once("flux.php"); break;
            case "gerer": if ($_SESSION['role'] == 'admin') require_once("gerer_eleve.php"); break;
            case "deconnexion" : 
                    session_destroy(); 
                    unset ($_SESSION['login']); 
                    header("Location: index.php"); 
                    break;
        } 
    }
    ?>
</body>

<footer>Copyright</footer>

</html>