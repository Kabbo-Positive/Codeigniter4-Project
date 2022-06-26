<?php

namespace app\Models;
use CodeIgniter\Model;

class BookModel extends Model{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title',
        'author',
        'isbn_no'
    ];
}

?>