<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'email','password','isModerator','bio', 'profile_picture'];
}