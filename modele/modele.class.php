<?php
	class Modele
	{
		private $unPDO; //instance de la classe PDO

		public function __construct (){
			$this->unPDO = null;
			try{
				$url = "mysql:host=localhost;dbname=mlr1";
				$user = "root";
				$mdp = "";
				$this->unPDO = new PDO($url,$user,$mdp);
			}
			catch (PDOException $exp){
				echo 'erreur de connexion a la BDD';
				echo $exp->getMessage();
			}
		}
		/***********************  ***********************/
		public function verifConnexion ($table, $login, $mdp){
			if($this->unPDO != null){
				if ($table == 'administrateur') {
					$requete = "SELECT * FROM ".$table." WHERE LOGINA = :login and MDPA = :mdp";
				}else {
					$requete = "SELECT * FROM ".$table." WHERE LOGINE = :login and MDPE = :mdp";
				}
				$donnees = array(":login"=>$login , ":mdp"=>$mdp);
				$select = $this->unPDO->prepare($requete);
				$select->execute ($donnees);
				$unUser = $select->fetch(); //Un seul resultat
				var_dump($unUser);
				return $unUser;
			}else {
				return null;
			}
		}

		/******************************************************************************************************* */
		
		public function selectWhereEtudiant ($idetudiant){
			if($this->unPDO != null){
				$requete = "select * from etudiant where IDE =".$idetudiant ; 
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$lEtudiant = $select->fetch(); 
				return $lEtudiant;
			}else {
				return null; 
			}
		}

		public function selectWhereClasse ($idclasse){
			if($this->unPDO != null){
				$requete = "select * from classe where IDC =".$idclasse ; 
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$laClasse = $select->fetch(); 
				return $laClasse;
			}else {
				return null; 
			}
		}

		public function selectAllEtudiants ($idclasse){
			if($this->unPDO != null){
				$requete = "select * from etudiant where IDC =".$idclasse; 
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$lesEtudiants = $select->fetchAll(); 
				return $lesEtudiants;
			}else {
				return null; 
			}
		}

		public function selectAllEtudiant ($idrole){
			if($this->unPDO != null){
				$requete = "select * from etudiant"; 
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$lesEtudiant = $select->fetchAll(); 
				return $lesEtudiant;
			}else {
				return null; 
			}
		}


		public function insertEtudiant ($tab){
			if($this->unPDO != null){
				$requete = "insert into etudiant values (null, :classeetudiant, :nometudiant, 
				:prenometudient, :pseudoetudiant, :mdpetudiant, :emailetudiant);"; 
				$donnees = array(":classeetudiant"=>$tab['classeetudiant'], 
								 ":nometudiant"=>$tab['nometudiant'], 
								 ":prenometudient"=>$tab['prenometudient'],
								 ":pseudoetudiant"=>$tab['pseudoetudiant'], 
								 ":mdpetudiant"=>$tab['mdpetudiant'], 
								 ":emailetudiant"=>$tab['emailetudiant']
								);
				
				$select = $this->unPDO->prepare($requete); 
				$select->execute($donnees); 
			} 
		}

/*************************************************************************************************************** */

		public function selectAllTransports ($idtransport){
			if($this->unPDO != null){
				$requete = "select * from moyen_transport where IDM =".$idtransport; 
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$lesTransports = $select->fetchAll(); 
				return $lesTransports;
			}else {
				return null; 
			}
		}

		public function selectAllMoyens ($choix){
			if($this->unPDO != null){
				$requete = "select t.* from moyen_transport t, categorie c where c.IDCAT = t.IDCAT and c.LIBELLECAT='".$choix."';";
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$lesTransports = $select->fetchAll(); 
				return $lesTransports;
			}else {
				return null; 
			}
		}
		public function selectWhereTransport ($idtransport){
			if($this->unPDO != null){
				$requete = "select * from moyen_transport where IDM =".$idtransport ; 
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$leTransport = $select->fetch(); 
				return $leTransport;
			}else {
				return null; 
			}
		}

		public function insertTransport ($tab){
			if($this->unPDO != null){
				$requete = "insert into moyen_transport values (null, :nom, 
				:prenom, :email, :idclasse);"; 
				$donnees = array(":nom"=>$tab['nom'], 
								 ":prenom"=>$tab['prenom'], 
								 ":email"=>$tab['email'], 
								 ":idclasse"=>$tab['idclasse']);
				$select = $this->unPDO->prepare($requete); 
				$select->execute($donnees); 
			} 
		}

		/******************************************************************************************************* */
		public function insertEmprunter ($tab){
			if($this->unPDO != null){
				$requete = "insert into emprunter values ( :ide, 
				:idm, :annee);"; 
				$donnees = array(":ide"=>$tab['ide'], 
								 ":idm"=>$tab['idm'], 
								 ":annee"=>$tab['annee']
								);
				
				$select = $this->unPDO->prepare($requete); 
				$select->execute($donnees); 
			} 
		}

		public function selectAllEmprunter($ide){
			if($this->unPDO != null){
				$requete = "select t.NOMM, c.LIBELLECAT, e.annee 
				from moyen_transport t, categorie c, emprunter e 
				where t.IDCAT = c.IDCAT 
				and e.IDM = t.IDM 
				and e.IDE =".$ide;
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$lesTransports = $select->fetchAll(); 
				return $lesTransports;
			}else {
				return null; 
			}
		}

		/******************************************************************************************************* */
		public function selectWhereRetard ($idretard){
			if($this->unPDO != null){
				$requete = 'select r.DATE_HEURER, r.DUREE, r.HEURE
				from retard r, billet_de_retard b, etudiant e
				where r.IDR=b.IDR
				and b.IDE="'.$idretard.'"
				group by DATE';
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$leRetard = $select->fetch(); 
				return $leRetard;
			}else {
				return null; 
			}
		}

		public function selectAllRetards ($idretard){
			if($this->unPDO != null){
				$requete = 'select r.DATE, r.DUREE, r.HEURE
				from retard r, billet_de_retard b, etudiant e
				where r.IDR=b.IDR
				and b.IDE="'.$idretard.'"
				group by DATE'; 
				$select = $this->unPDO->prepare($requete); 
				$select->execute(); 
				$lesRetards = $select->fetchAll(); 
				return $lesRetards;
			}else {
				return null; 
			}
		}
	}
?>