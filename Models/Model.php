<?php 


    class Model{

        private $bd;
        private static $instance;

        private function __construct(){
            require('credentials.php') ; 
            $this->bd = new PDO($dsn,$login, $mdp);
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public static function getModel(){
            
            if (self::$instance === null) {
                self::$instance = new self();
            }
            return self::$instance;
        }


        //recup tout les projets. 

        public function getAllProjects(){
        	$requete=$this->bd->prepare('SELECT projects_title, projects_description,projects_creationDate FROM projects'); 
        	$requete->execute(); 
        	return $requete->fetchAll(PDO::FETCH_ASSOC); 
        }

        public function getInfoProjects($projects_id){
        	$requete=$this->bd->prepare('SELECT projects_title, projects_description,projects_creationDate FROM projects where projects_id=:projects_id'); 
        	$requete->bindValue(":projects_id", $projects_id);
            $requete->execute(); 
        	return $requete->fetchAll(PDO::FETCH_ASSOC); 
        }

        //nom + contact des auteurs ayant participé au projet passé en param. A utiliser pour l'affichage dans le tableau.

        public function getProjectsAuthors(int $projects_id){
    		$requete=$this->bd->prepare('SELECT authors_name, authors_contact from authors natural join createBy natural join projects 
                    where projects_id=:projects_id'); 
    		$requete->bindValue(":projects_id", $projects_id);
        	$requete->execute(); 
        	return $requete->fetchAll(PDO::FETCH_ASSOC); 
        }


         //nom des langages utilisés pour le projet passé en param. 
        public function getProjectsLanguages(int $projects_id){
            $requete=$this->bd->prepare('SELECT languages_name from languages natural join isCoded natural join projects 
                    where projects_id=:projects_id'); 
            $requete->bindValue(":projects_id", $projects_id);
            $requete->execute(); 
            return $requete->fetchAll(PDO::FETCH_ASSOC); 
        }


        public function getAllLanguages(){
            $requete=$this->bd->prepare('SELECT * from languages'); 
            $requete->execute(); 
            return $requete->fetchAll(PDO::FETCH_ASSOC); 
        }

        public function getIntro(){
            $requete=$this->bd->prepare('SELECT projects_id ,projects_title, projects_intr from projects'); 
            $requete->execute(); 
            return $requete->fetchAll(PDO::FETCH_ASSOC); 
        }

        public function getExist($projects_id){
            $requete=$this->bd->prepare("SELECT EXISTS (SELECT projects_id FROM projects WHERE projects_id =:projects_id)");
            $requete->bindValue(":projects_id", $projects_id);
            $requete->execute(); 
            if (in_array('t',$requete->fetch(PDO::FETCH_ASSOC))) {return true ; } 
            else {return false ; } 
        }

        public function getSkills(){
            $requete=$this->bd->prepare("SELECT * FROM skill");
            $requete->execute(); 
            return $requete->fetchAll(PDO::FETCH_ASSOC); 
        }

        public function getAdmin(){
            $requete=$this->bd->prepare("SELECT * FROM admin");
            $requete->execute(); 
            return $requete->fetch(PDO::FETCH_ASSOC); 

        }

        public function getAllInfoProjects(){
            $requete=$this->bd->prepare("SELECT * FROM projects");
            $requete->execute(); 
            return $requete->fetchAll(PDO::FETCH_ASSOC); 

        }
        
        public function getAllAuthors(){
            $requete=$this->bd->prepare("SELECT * FROM authors");
            $requete->execute(); 
            return $requete->fetchAll(PDO::FETCH_ASSOC); 

        }



        public function addProject($infos) {
            $requete=$this->bd->prepare("INSERT INTO projects VALUES (default, :title, :intr, :descript, :creationdate) ");
            foreach($infos as $k => $v) {
                $requete->bindValue(":".$k, $v);
            }
            return $requete->execute() ; 
        }

    }
?>