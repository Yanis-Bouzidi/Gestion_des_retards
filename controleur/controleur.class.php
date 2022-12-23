<?php
	require_once ('modele/modele.class.php');
	class Controleur
	{
		private $unModele; //Instance de la classe Modele

		public function __construct()
		{
			//Instanciation du Modele
			$this->unModele = new Modele ();
		}
		/********************  ********************/
		public function verifConnexion ($table, $login, $mdp ){
 			return $this->unModele-> verifConnexion ($table, $login, $mdp ) ; 
		}

		public function selectWhereClasse($idclasse){
			$laClasse = $this->unModele->selectWhereClasse($idclasse);
			return $laClasse; 
		}

		public function selectWhereEtudiant($idetudiant){
			$lEtudiant = $this->unModele->selectWhereEtudiant($idetudiant);
			return $lEtudiant; 
		}

		public function selectAllEtudiants ($idetudiant){
			$lesEtudiants = $this->unModele->selectAllEtudiants($idetudiant); 
			return $lesEtudiants; 
		}

		public function selectAllEtudiant ($idrole){
			$lesEtudiant = $this->unModele->selectAllEtudiant($idrole); 
			return $lesEtudiant; 
		}

		public function insertEtudiant($tabe)
		{
			//on vérifie les données 
			//on appelle le modele pour l'insertion 
			$this->unModele->insertEtudiant($tabe);
		}


		public function selectAllTransports ($idtransport){
			$lesTransports = $this->unModele->selectAllTransports($idtransport); 
			return $lesTransports; 
		}

		public function selectAllMoyens ($choix){
			$lesTransports = $this->unModele->selectAllMoyens ($choix);
			return $lesTransports; 
		}

		public function selectWhereTransport($idtransport){
			$leTransport = $this->unModele->selectWhereTransport($idtransport);
			return $leTransport; 
		}

		public function insertTransport($tab)
		{
			//on vérifie les données 
			//on appelle le modele pour l'insertion 
			$this->unModele->insertTransport($tab);
		}

		public function insertEmprunter($tab)
		{
			//on vérifie les données 
			//on appelle le modele pour l'insertion 
			$this->unModele->insertEmprunter($tab);
		}

		public function selectAllEmprunter($ide)
			{
				$leTransport = $this->unModele->selectAllEmprunter($ide);
			return $leTransport; 
			}

		public function selectWhereRetard($idretard){
			$leRetard = $this->unModele->selectWhereRetard($idretard);
			return $leRetard; 
		}

		public function selectAllRetards ($idretard){
			$lesRetards = $this->unModele->selectAllRetards($idretard); 
			return $lesRetards; 
		}
	}
?>