<?php namespace App\Models;

use CodeIgniter\Model;

class ULogModel extends Model{

    public $table = 'ulogins';
 
    public $returnType = 'array';
    public $useSoftDeletes=false;
    public $allowedFields=['uid','email','password','isAddmin','isUser'];
  
    public $useTimestamps=true;
    
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';







}