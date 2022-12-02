<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class UsersModel extends Model
    {
        protected $table = 'users';
        protected $primaryKey = 'id';
        protected $useAutoIncrement = true;
        protected $allowedFields = ['id','login','password', 'name', 'logged'];
        protected $returnType = 'object';
        
    }


?>