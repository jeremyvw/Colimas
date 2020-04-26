<?php

use Phalcon\Mvc\Model;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;

class Borrows extends Models
{
    public $BORROW_ID;
    public $BOOK_ID;
    public $USER_ID;
    public $BORROW_STARTDATE;
    public $BORROW_EXPECTEDRETURNDATE;
    public $BORROW_RETURNDATE;
    public $BORROW_STATUS;

    public function initialize()
    {
        $this->setReadConnectionService('db');
        $this->setWriteConnectionService('db');
        $this->setSchema('dbo');
        $this->setSource('borrows');

        $this->belongsTo(
            'BOOK_ID',
            'Books',
            'BOOK_ID'
        );

        $this->belongsTo(
            'USER_ID',
            'Users',
            'USER_ID'
        );
    }
}