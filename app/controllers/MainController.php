<?php
// #MAINCONTROLLER

class MainController
{
    
    /**
     * Function to display home page
     * 
     * @var $viewVars [array] Optionnal - Set of informations used for page content 
    */
    public function home() { 
        $this->show('home');
    }

    /**
     * Function to display About
     * 
     * @var $viewVars [array] Optionnal - Set of informations used for page content 
    */
    public function about() {
        $this->show('about');
    }

    /**
     * Function to display Contact
     * 
     * @var $viewVars [array] Optionnal - Set of informations used for page content 
    */
    public function contact() {
        $this->show('contact');
    }
    
    /**
     * Function to display blog 
     * 
     * @var $viewVars [array] Optionnal - Set of informations used for page content 
    */
    public function blog() { 
        $this->show('blog');
    }

    /**
     * Function to display admin 
     * 
     * @var $viewVars [array] Optionnal - Set of informations used for page content 
    */
    public function register() { 
        $this->show('register');
    }
    

    /**
     * Function to construct the requested page with needed informations
     *
     * @param string $viewName  Name of the template to display 
     * @param array $viewVars   Set of informations used for page content
     */
    public function show($viewName, $viewVars=[]) {
        // #URL-REWRITING
        /* Fix part of the url */
        $viewVars['baseURL'] = $_SERVER["BASE_URI"];

        // Dynamic part of the url - to customize css class depending on current page
        $viewVars['currentURL'] = $_GET['_url'] ?? "/" ;
        
        // Construction of the page to display
        require_once __DIR__.'/../views/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}