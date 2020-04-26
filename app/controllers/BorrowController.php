<?php

namespace App\Controllers;

use Phalcon\Mvc\Controller;
use App\Models\Book;
use App\Models\Users;
use App\Models\Borrows;

class BorrowController extends ControllerBase
{
    public function indexAction()
    {

    }

    public function manageAction()
    {
        $this->view->books = Borrows::find();
    }
}