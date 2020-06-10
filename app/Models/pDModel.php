<?php namespace App\Models;

use CodeIgniter\Model;

class pDModel extends Model{

   public $table = 'pdata';
   public $returnType = 'array';
   public $useSoftDeletes=false;
   public $allowedFields=['nc','nd','nr'];

   
  
    
}