<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\Loginhandler;

class HomeController extends Controller {
    private $loggedUser;
    
    public function __construct(){
        $this->loggedUser=LoginHandler::checkLogin();
        if($this->loggedUser === false){
            $this->redirect('/Login');
        }
        
}
    public function index() {
        //$this->loggedUser->name;
        $this->render('home', ['nome' => 'Bonieky']);
    }


}