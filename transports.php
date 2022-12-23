<?php

    $idetudiant = $_SESSION['ide'];

	$lesRers = $unControleur->selectAllMoyens("rer");
	
	$lesMetros = $unControleur->selectAllMoyens("metro");
	
	$ide = $_SESSION['ide']; 
	$lesTransports = $unControleur->selectAllEmprunter ($ide); 

	require_once ("vue/vue_transports.php"); 

	if (isset($_POST['AjouterMoyen']))
	{
		$idm = $_POST['IDM']; 
		$ide = $_SESSION['ide']; 
		$annee = date("Y-m-d"); 
		$tab = array("ide"=>$ide, "idm"=>$idm, "annee"=>$annee); 
	    $unControleur->insertEmprunter ($tab); 
	 }
?>