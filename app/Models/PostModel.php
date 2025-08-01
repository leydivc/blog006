<?php
namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model {
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'created_at', 'image', 'category', 'content']; // Nuevo atributo descripción
}