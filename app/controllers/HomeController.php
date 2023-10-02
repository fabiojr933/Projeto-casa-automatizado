<?php
namespace app\controllers;
use app\core\Controller;
class HomeController extends Controller{  
    
   public function index(){       
      $dados["view"]       = "Dashboard/index";
      $this->load("template", $dados);
   } 
}
