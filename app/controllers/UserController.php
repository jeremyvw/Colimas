<?php 

namespace App\Controllers;

use Phalcon\Mvc\Controller;
use App\Models\Users;

class UserController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->users = Users::find();
    }

    public function manageAction()
    {
        // $this->view->users = Users::find();
        // $query = $this->modelsManager->createQuery('SELECT * FROM Users');
        // $results = $query->execute();
        // $this->view->results = $results;
        
    } 

    public function registerAction()
    {
        
    }
    
    public function loginAction()
    {
        
    }

}