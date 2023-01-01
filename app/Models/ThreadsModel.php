<?php

namespace App\Models;

use CodeIgniter\Model;

class ThreadsModel extends Model
{
    protected $table = 'threads';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'title', 'type', 'author', 'content', 'created'];
}
