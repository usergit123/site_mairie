<?php

	class Modele
	{
			private $pdo, $table;
			
			public function __construct($serveur, $bdd, $user, $mdp)
			{
				$this->pdo=null;
				try{
					$this->pdo = new PDO ("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
				}
				catch (PDOException $exp)
				{
					echo "Erreur de connexion à la base de données";
				}
			}
		public function getTable()
		{
			return $this->table="";
		}
		public function setTable ($uneTable)
		{
			$this->table=$uneTable;
		}
		
		public function selectALL ()
		{
			
			if ($this->pdo !=null) //appel de la fonction conn
			{
				$requete = "select * from ".$this->table.";";
				//preparation de la requete
					$select = $this->pdo->prepare ($requete);
					//execution de la requete
					$select->execute ();
					//extraction des enregistrements
					return $select->fetchALL();
			}
			else
			{
				return null;
			}
		}
		public function selectWhere ($champs, $where, $operateur)
		{
			$chaineChamps = array();
			$tabWhere = array();
			$donnee = array();
			
			$chaineChamps = implode (", ", $champs);
			
			foreach ($where as $cle=>$valeur)
			{
				$tabWhere[] = $cle."= :".$cle;
				$donnees[":".$cle] = $valeur;
				echo $valeur;
			}
			
			$chaineWhere = implode ($operateur, $tabWhere);
			
			$requete = "select ".$chaineChamps." from ".$this->table." 
			where ".$chaineWhere.";";
			
			echo $requete;
			
			if ($this->pdo !=null) //appel de la fonction conn
			{
				
				//preparation de la requete
					$select = $this->pdo->prepare ($requete);
					//execution de la requete
					$select->execute ($donnees);
					//extraction des enregistrements
					return $select->fetchALL();
			}
			else
			{
				return null;
			}
			
			
		}
		public function insert ($tab)
		{
			if ($this->pdo !=null) //appel de la fonction connexion
			{
				$donnees = array();
				$tabValues = array();
				foreach ($tab as $cle=>$valeur)
				{
					$tabValues[] = ":".$cle;
					$donnees[":".$cle] = $valeur;
					echo $valeur;
				}
				$chaineTab = implode (", ", $tabValues);
				
				$requete = "insert into ".$this->table." values (null, ".$chaineTab.");";
				
				echo $requete;
				
				$select = $this->pdo->prepare ($requete);
				//execution de la requete
				$select->execute ($donnees);
			}
		}
		
		public function insertMariage($tab)
		{
			if ($this->pdo !=null) //appel de la fonction connexion
			{
				$donnees = array();
				$tabValues = array();
				foreach ($tab as $cle=>$valeur)
				{
					$tabValues[] = ":".$cle;
					$donnees[":".$cle] = $valeur;
					echo $valeur;
				}
				$chaineTab = implode (", ", $tabValues);
				
				$requete = "insert into ".$this->table." (idP1,idP2,dateMariage) values (".$chaineTab.");";
				
				echo $requete;
				
				$select = $this->pdo->prepare ($requete);
				//execution de la requete
				$select->execute ($donnees);
			}
		}

		public function insert_participer ($tab)
		{
			//var_dump($tab);
			if ($this->pdo !=null) //appel de la fonction connexion
			{
				$donnees = array();
				$tabValues = array();
				foreach ($tab as $cle=>$valeur)
				{
					$tabValues[] = ":".$cle;
					$donnees[":".$cle] = $valeur;
				}
				$chaineTab = implode (", ", $tabValues);
				
				$requete = "insert into ".$this->table." value (".$tab['idL'].",".$tab['idP'].",".$tab['datePL'].");";
				
				//echo $requete;
				
				$select = $this->pdo->prepare ($requete);
				//execution de la requete
				$select->execute ($donnees);
				//var_dump($donnees);
			}
		}
		
		public function delete($tabId)
		{
			if($this->pdo !=null)
			{
				$chaine = "";
				$tab = array();
				$donnees = array();
				foreach($tabId as $cle=>$valeur)
				{
					$tab[] = $cle." = :".$cle;
					$donnees[":".$cle] = $valeur;
				}
				$chaine = implode (", ", $tab);
				
				$requete = "delete from ".$this->table." where ".$chaine.";";
				
				$select = $this->pdo->prepare ($requete);
				//execution de la requete avec les donnees des variables PDO
				$select->execute ($donnees);
			}
		}
		public function afficher_mariage ($idP)
		{
			
			if ($this->pdo !=null) //appel de la fonction conn
			{
				$requete = "select concat(p1.nom,' ',p1.prenom) a, concat(p2.nom,' ',p2.prenom) b, dateMariage
				from personne p1, personne p2, mariage m
				where p1.idP=m.idP1 and p2.idP=m.idP2 and p1.idP=".$idP.";";
				//preparation de la requete
					$select = $this->pdo->prepare ($requete);
					//execution de la requete
					$select->execute ();
					//extraction des enregistrements
					return $select->fetchALL();
			}
			else
			{
				return null;
			}
		}
		public function afficher_mariage_admin ()
		{
			
			if ($this->pdo !=null) //appel de la fonction conn
			{
				$requete = "select concat(p1.nom,' ',p1.prenom) a, concat(p2.nom,' ',p2.prenom) b, dateMariage
					from personne p1, personne p2, mariage m
					where p1.idP=m.idP1 and p2.idP=m.idP2;";
				//preparation de la requete
					$select = $this->pdo->prepare ($requete);
					//execution de la requete
					$select->execute ();
					//extraction des enregistrements
					return $select->fetchALL();
			}
			else
			{
				return null;
			}
		}
		public function selectUser ($pseudo,$mdp)
		{
			
			if ($this->pdo !=null) //appel de la fonction conn
			{
				$requete = "select * from personne where pseudo='".$pseudo."' and mdp ='".$mdp."';";
				//preparation de la requete
					$select = $this->pdo->prepare ($requete);
					//execution de la requete
					$select->execute ();
					//extraction des enregistrements
					return $select->fetchALL();
			}
			else
			{
				return null;
			}
		}
		
		public function verif_pseudo ($login)
		{
			if ($this->pdo !=null)
			{
				$requete="SELECT pseudo FROM personne WHERE pseudo = '".$login."'; ";
				
				
				
				//preparation de la requete
				$select = $this->pdo->prepare ($requete);
				//execution de la requete
				$select->execute ();
				//extraction des enregistrements
				return $select->fetchALL();
			}
			else
			{	
				return null;
			}
		}
	}		
?>