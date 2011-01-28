<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_home extends Panada {
    
    public function __construct(){
        
        parent::__construct();
        
        $this->request = new Library_request;
    }
    
    public function index(){
        
        $views['page_title']    = 'hello world!';
        $views['body']          = 'This is hello world body!';
        
        $page = 'index';
        
        if( $zoom = $this->request->get('zoom') ){
            
            if($zoom == 1)
                $page = 'index2';
            
            if($zoom == 2)
                $page = 'index3';
            
            if($zoom == 3)
                $page = 'index4';
        }
        
        $this->view($page, $views);
    }
}