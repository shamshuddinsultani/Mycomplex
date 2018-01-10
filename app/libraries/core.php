<?php 
/**
*App core class
*Creates urls and loads core controller
*URL format - /controller/method/params
**/

class Core {
     //In current controller it will load the current one else it will load default i.e pages
     protected $currentController = 'Pages';
     //It will be the default method 
     protected $currentMethod     = 'index';
     //passing the parameters
     protected $params            =   [];

     //This function automatically starts when the class is instantiated
     public function __construct(){
     	// print_r($this->getUrl());
          $url = $this->getUrl();

          //Looking in the controllers for url filename
          // Since all is directing towards public index so here we are going into  
          if()
     }
     
     public function getUrl(){
     	//isset — Determine if a variable is set and is not NULL
     	if(isset($_GET['url'])){
               //if in last there is putted / then we are trimming it
               $url = rtrim($_GET['url'],'/');
               //making url fully safe
               $url = filter_var($url,FILTER_SANITIZE_URL);
               //now converting url into array after base url and separating it with /
               $url = explode('/',$url);
               return $url;
          }
     }



}//End of Core class

$init = new Core();

 ?>