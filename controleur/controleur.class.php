<?php
    require_once("modele/modele.class.php");
    class Controleur
    {
        private $unModele;
        public function __construct($serveur, $bdd, $user, $mdp)
        {
            //instanciation de la classe modele
            $this->unModele = new Modele ($serveur, $bdd, $user, $mdp);
        }
        public function setTable($uneTable)
        {
            $this->unModele->setTable($uneTable);
        }
        public function getTable()
        {
            return $this->unModele->getTable();
        }

        public function selectALL ()
        {
            return $this->unModele->selectALL ();
        }
        public function insert ($tab)
        {
            //on peut controler les donnees avant insertion
            //le role du controleur 
            $this->unModele->insert ($tab);
        }
		
        public function insertMariage ($tab)
        {
            //on peut controler les donnees avant insertion
            //le role du controleur 
            $this->unModele->insertMariage ($tab);
        }

		public function insert_participer ($tab)
        {
            //on peut controler les donnees avant insertion
            //le role du controleur 
            $this->unModele->insert_participer ($tab);
        }
		
        public function delete ($tabId)
        {
            $this->unModele->delete ($tabId);
        }
        public function selectWhere ($champs, $where, $operateur)
        {
            return $this->unModele->selectWhere ($champs, $where, $operateur);
        }
		public function afficher_mariage ($idP)
        {
            return $this->unModele->afficher_mariage ($idP);
        }
		public function afficher_mariage_admin ()
        {
            return $this->unModele->afficher_mariage_admin ();
        }
		public function selectUser ($pseudo,$mdp)
		{
			return $this->unModele->selectUser($pseudo,$mdp);
		}
		
		public function verif_pseudo ($login)
		{
			return $this->unModele->verif_pseudo($login);
		}
		
    }
?>