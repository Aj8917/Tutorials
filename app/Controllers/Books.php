<?php

namespace App\Controllers;

use codeigniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Book_model;

class Books extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        $this->Book_model = new Book_Model();
        $data['books']=$this->Book_model->get_all_books();
        return view('book_view',$data);
    }
}
