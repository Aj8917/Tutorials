<?php 
 namespace App\Models;
 use Codeigniter\Model;

 class Book_model extends Model
 {
        var $table='books';


        public function __construct()
        {
              parent::__construct();
              $db =\Config\Database::connect();
              $builder=$db->table('books');
        }
        public function get_all_books()
        {
            $query=$this->db->query('select * from books');
            return $query;
        }
 }// class


