// Quelques fonctions utilisés pour récupérer des informations depuis la base de données. Il y en a en réalité beaucoup plus. 

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


         //nom des langages utilisés pour le projet passé en param. 
        public function getProjectsLanguages(int $projects_id){
            $requete=$this->bd->prepare('SELECT languages_name from languages natural join isCoded natural join projects 
                    where projects_id=:projects_id'); 
            $requete->bindValue(":projects_id", $projects_id);
            $requete->execute(); 
            return $requete->fetchAll(PDO::FETCH_ASSOC); 
        }


    }
?>
