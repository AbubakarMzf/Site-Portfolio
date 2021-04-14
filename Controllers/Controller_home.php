<?php

	class Controller_home extends Controller {

		private $nav= ["navElem"=>["Home","Skills", "Projects", "Contact"]]; 


			public function action_default(){ 
				$this->render("home",$this->nav);
			}
			public function action_skills(){
				$m = Model::getModel(); 
				$data = ["navElem"=>$this->nav["navElem"], "skill" => $m->getSkills()
			]; 
				$this->render("skills", $data);
			}
			public function action_projects(){
				$m = Model::getModel(); 
				$data = [ "navElem"=>$this->nav["navElem"], "proj" => $m->getIntro() ]; 
				$this->render("projects", $data); 
			}

			public function action_about(){
				$this->render("about",$this->nav);
			}
			public function action_contact(){
				$this->render("contact", $this->nav);
			}
			public function action_more(){
				$this->render("more");
			}
			
	}  	
?>