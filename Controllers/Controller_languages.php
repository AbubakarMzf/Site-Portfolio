<?php

	class Controller_languages extends Controller {
		private $nav= ["navElem"=>["Home","Skills", "Projects", "Contact"]];
			public function action_default(){ 
				$this->render("home", $this->nav);
			}

			// FEATURES & TESTS
			public function action_add(){
				if (isset($_SESSION["loged"]) && $_SESSION["loged"]){
					$this->render("addL");
				}
			}
			
            
    }			
	  	
?>