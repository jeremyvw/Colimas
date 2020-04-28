<?php

namespace App\Controllers;

use Phalcon\Mvc\Controller;
use App\Validation\BookValidation;
use App\Models\Books;
use App\Models\Authors;
use App\Models\Categories;

class BookController extends ControllerBase
{
    public function indexAction()
    {

    }

    public function manageAction()
    {
        $this->view->books = Books::find();

    }

    public function createAction()
    {
        $this->view->authors = Authors::find();
        $this->view->categories = Categories::find();

    }

    public function addAction()
    {
        $book = new Books();
        $this->view->authors = Authors::find();
        $this->view->categories = Categories::find();

        // $validation = new BookValidation();
        // $messages = $validation->validate($_POST);
        // if(count($messages))
        // {
        //     foreach ($message as $messages)
        //     {
        //         $this->flashSession->error($message->getMessage());
        //     }
        //     $this->response->redirect('/book/create');
        // }
        // else
        // {
            $book->BOOK_TITLE = $this->request->getPost('title');
            $book->BOOK_YEAR = $this->request->getPost('year');
            $book->BOOK_SHELF = $this->request->getPost('shelf');
            $book->BOOK_DESCRIPTION = $this->request->getPost('description');
            $book->BOOK_PAGECOUNT = $this->request->getPost('pagecount');
            $book->BOOK_STATUS = $this->request->getPost('status');
            $book->BOOK_COUNT = $this->request->getPost('count');
            
            // $path = '/img/books/'.$book->BOOK_TITLE.'.jpg';
            if($this->request->hasFiles())
            {
                $image = $this->request->getUploadedFiles()[0];
                $path = 'img/books/'.$image->getName();
                $book->BOOK_COVERIMAGE = $path;
                $image->moveTo($path);
            }


            // $book->BOOK_COVERIMAGE = 'books/'.$book->BOOK_ID.'.jpg';
            // if ($this->request->hasFiles()){
            //     $image = $this->request->getUploadedFiles()[0];
            //     $image->moveTo($book->BOOK_COVERIMAGE);
            // }
    
            $book->AUTHOR_ID = $this->request->getPost('authorid');
            $book->CATEGORY_ID = $this->request->getPost('categoryid');
    
            $success = $book->save();
    
            if($success)
            {
                // $this->flashSession('Book has been successfully added into collection.');
                $this->response->redirect('/book/manage');
            }

            // if ($book->save() === false)
            // {
            //     echo 'Pfft';
            // }
            // else
            // {
            //     $this->view->books = $book;
            //     $this->response->redirect('book/manage');
            // }

        // }


        // if($success)
        // {
        //     $this->flasSession->success("Book successfully added into collections"); 
        //     $this->response->redirect('/book/manage');   
        // }

        
    }

    public function editAction($id)
    {
        // $id = $this->dispatcher->getParam("id");
        $book = Books::findFirstByBOOK_ID($id);
        
        $this->view->book = $book;
        $this->view->authors = Authors::find();
        $this->view->categories = Categories::find();
    }

    public function updateAction($id)
    {
        $book = Books::findFirstByBOOK_ID($id);

        $this->view->authors = Authors::find();
        $this->view->categories = Categories::find();

        $title = $this->request->getPost('title');
        $shelf = $this->request->getPost('shelf');
        $description = $this->request->getPost('description');
        $pagecount = $this->request->getPost('pagecount');
        $status = $this->request->getPost('status');
        $count = $this->request->getPost('count');
        
        if($this->request->hasFiles())
        {
            unlink($book->BOOK_COVERIMAGE);
            $image = $this->request->getUploadedFiles()[0];
            $path = 'img/books/'.$image->getName();
            $book->BOOK_COVERIMAGE = $path;
            $image->moveTo($path);
        }

        $authorid = $this->request->getPost('authorid');
        $categoryid = $this->request->getPost('categoryid');

        // $book = Books::findFirst("id = '$BOOK_ID'");
        $book->BOOK_TITLE = $title;
        $book->BOOK_SHELF = $shelf;
        $book->BOOK_DESCRIPTION = $description;
        $book->BOOK_PAGECOUNT = $pagecount;
        $book->BOOK_STATUS = $status;
        $book->BOOK_COUNT = $count;

        $book->AUTHOR_ID = $authorid;
        $book->CATEGORY_ID = $categoryid;

        if ($book->save() === false)
        {
            foreach ($book->getMessages() as $message)
            {
                echo $message, "\n";
            }
        }
        else
        {
            $this->response->redirect('/book/manage');
        }

    }

    public function destroyAction($id)
    {
        $book = Books::findFirstByBOOK_ID($id);

        $success = $book->delete();
        
        if($success)
        {
            $this->flashSession->success('Book has been successfully removed from collection.');
        }
        $this->response->redirect('/book/manage');
    }

}