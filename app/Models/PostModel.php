<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model{

    public $table = 'posts';
 
    public $returnType = 'array';
    public $useSoftDeletes=false;
    public $allowedFields=['uid','suspect_name','suspect_addres','suspect_email','suspect_city','suspect_zipCode','suspect_country','gender','suspect_doc','suspect_url'];
  
    public $useTimestamps=true;
    
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';



}  