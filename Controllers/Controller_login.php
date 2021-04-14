<?php
	// THE WHOLE CODE : FEATURES & TESTS  
	class Controller_login extends Controller {
		private $nav= ["navElem"=>["Home","Skills", "Projects", "Contact"]];
			public function action_default(){ 
				$this->render("login");
			}
			public function action_check(){
				$m = Model::getModel(); 
				$admin = $m->getAdmin() ; 
				if (isset($_POST['login'], $_POST['password']) && $_POST['login'] === $admin['login'] 
				&&  password_verify($_POST['password'], $admin['pass'])){
					$_SESSION["loged"] = true ; 
					$this->render("admin",$this->nav); 
				}
				else {
					$this->render("error", ["title" =>"error", "message" => "try again"]); 
				}
            }

			public function action_projects(){
				$m = Model::getModel(); 
				$data = [ "navElem"=>$this->nav["navElem"], "table" => $m->getAllInfoProjects(), "authors" => $m->getAllAuthors() ] ;
				if (isset($_SESSION["loged"]) && $_SESSION["loged"]){
				$this->render("all",$data);
				}
				else {
					$this->render("message", ["title" =>"error", "message" => "not connected"]) ; 
				}  
			}

			
			public function action_languages(){
				$m = Model::getModel(); 
				$data = [ "navElem"=>$this->nav["navElem"], "table" => $m->getAllLanguages() ] ;
				if (isset($_SESSION["loged"]) && $_SESSION["loged"]){
				$this->render("all",$data);
				}
				else {
					$this->render("message", ["title" =>"error", "message" => "not connected"]) ; 
				}  
			}



    }			
	  	
?>