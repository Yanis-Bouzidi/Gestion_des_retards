<?php
	
  $idclasse = $_SESSION['idc'];

  $idetudiant = $_SESSION['ide'];

	$laClasse = $unControleur->selectWhereClasse($idclasse);

  $lEtudiant = $unControleur->selectWhereEtudiant($idetudiant);
  
	$lesEtudiants = $unControleur->selectAllEtudiants ($idclasse); 

	require_once ("vue/vue_informations.php"); 
?>