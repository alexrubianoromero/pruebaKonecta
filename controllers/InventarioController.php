<?php

namespace controllers;

use models\InventarioModel;
use views\InventarioView;


class InventarioController
{
    protected $view;

    public function __construct()
    {   
        // echo '<pre>'; 
        // print_r($_REQUEST);
        // echo '</pre>';
        // die();
        
        $this->view = new InventarioView();
        
        if(!isset($_REQUEST['option'])){
            $this->mainView();
        }
        if( $_REQUEST['option'] == 'menuCodigos' ){ 
            $this->callViewCode(); 
        }

    } 

    public  function mainView()
    {
        $this->view->mainView();
    }
    
    public function callViewCode()
    {
        $modelo = new InventarioModel();
        $modelo->getListCode();
    }
  
}
?>