<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'tblecom';
    
    protected $allowedFields = [
        'name',
        'email',
        'password',
        'created_at'
    ];
}