<?php

$idrole = $_SESSION['role'];
  
	$lesEtudiant = $unControleur->selectAllEtudiant ($idrole); 

	require_once ("vue/vue_gerer_eleve.php"); 

    if (isset($_POST['AjouterEtudiant']))
	{
		$classeetudiant = $_POST['classeetudiant']; 
		$nometudiant = $_POST['nometudiant']; 
		$prenometudient = $_POST['prenometudient']; 
        $pseudoetudiant = $_POST['pseudoetudiant']; 
        $mdpetudiant = $_POST['mdpetudiant']; 
        $emailetudiant = $_POST['emailetudiant']; 
		$tab = array("classeetudiant"=>$classeetudiant, "nometudiant"=>$nometudiant, "prenometudient"=>$prenometudient, "pseudoetudiant"=>$pseudoetudiant, "mdpetudiant"=>$mdpetudiant, "emailetudiant"=>$emailetudiant); 
	    $unControleur->insertEtudiant ($tab); 
	 }
?>