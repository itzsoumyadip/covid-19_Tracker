<?php namespace App\Models;

use CodeIgniter\Model;

class AdminLModel extends Model{

    public $table = 'alogins';
 
    public $returnType = 'array';
    public $useSoftDeletes=false;
    public $allowedFields=['uid','email','password','isAddmin','isUser'];
  
    public $useTimestamps=true;
    
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';







}