<?php

namespace App\Controllers;

use App\Models\BookModel;

class Book extends BaseController
{
    public function index()
    {
        $books = new BookModel();
        $data['books'] = $books->findAll();
        return view('books/index',$data);
    }

    public function create()
    {
        return view('books/create');
    }

    public function store()
    {
        $books = new BookModel();
        $data = [
            'title'=> $this->request->getPost('title'),
            'author'=> $this->request->getPost('author'),
            'isbn_no'=> $this->request->getPost('isbn_no'),
        ];
        $books->save($data);
        return redirect()->to(base_url('books'))->with('status','Book Added Successfully');

    }

    public function edit($id)
    {
        $books = new BookModel();
        $data['books'] = $books->find($id);
        return view('books/edit',$data);
    }


    public function update($id)
    {
        $books = new BookModel();
        $data = [
            'title'=> $this->request->getPost('title'),
            'author'=> $this->request->getPost('author'),
            'isbn_no'=> $this->request->getPost('isbn_no'),
        ];
        $books->update($id,$data);

        return redirect()->to(base_url('books'))->with('status','Book Updated Successfully');
    }


    public function delete($id)
    {
        $books = new BookModel();
        $books->delete($id);

        return redirect()->to(base_url('books'))->with('status','Book Deleted Successfully');
    }
}
