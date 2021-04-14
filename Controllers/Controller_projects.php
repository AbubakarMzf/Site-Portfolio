<?php

	class Controller_projects extends Controller {
		private $nav= ["navElem"=>["Home","Skills", "Projects", "Contact"]];
			public function action_default(){ 
				$this->render("home", $this->nav);
			}
			public function action_project(){
				$m = Model::getModel(); 
				if ((isset($_GET["id"])) && preg_match("/^[0-9]*$/", $_GET['id']) && $m->getExist($_GET["id"])){
					$id = $_GET["id"] ;  
					$data = [ "navElem"=>$this->nav["navElem"], "proj" => $m->getInfoProjects($id), "id" => $id, 
					"languages" => $m->getProjectsLanguages($id), "authors"=> $m->getProjectsAuthors($id)
				]; 
					$this->render("more", $data); 
				}
				else {
					$data = [ "navElem"=>$this->nav["navElem"], "title" =>"error", "message" => "the project doesn't exist"]; 
					$this->render("message", $data); 
				}
			}

			// FEATURES & TESTS
			public function action_add(){
				if (isset($_SESSION["loged"], $_POST["title"], $_POST["intr"], $_POST["description"], $_POST["creationdate"]) 
					&& $_SESSION["loged"] && ! preg_match("/^ *$/", $_POST["title"]) && ! preg_match("/^ *$/", $_POST["intr"]) 
					&& ! preg_match("/^ *$/", $_POST["description"]) && ! preg_match("/^ *$/", $_POST["creationdate"])){
					$m = Model::getModel() ; 
					$infos = [
						"title" => $_POST["title"],
						"descript" => $_POST["description"],
						"intr" => $_POST["intr"],
						"creationdate" => $_POST["creationdate"], 						
					]; 
					$m->addProject($infos); 
					$this->render("message", ["title" => "Ajouté", "message" => " "]);
				}

				else {
					$this->render("message", ["title" => "ça marche pas", "message" => "jojo dodo dodo dodo dodo dodo"]);
				}
			}
			
            
    }			
	  	
?>