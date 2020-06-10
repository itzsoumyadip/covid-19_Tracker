<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    public $table = 'users';
 
    public $returnType = 'array';
    public $useSoftDeletes=false;
    public $allowedFields=['uid','name','email','password','phone','zipCode','gender'];
  
    public $useTimestamps=true;
    
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // protected $beforeInserted=['beforeInserted'];
    // protected $beforeUpdated=['beforeUpdated'];

    // protected function beforeInserted(array $data){
    //     $data =$this->passwordHash($data);

    //     return $data;

   // }
    // protected function beforeUpdated(array $data){
    //     $data =$this->passwordHash($data);

    //     return $data;

    // }


    // protected function passwordHash(array $data){
    //             if(isset($data['data']['password'])){
    //              $data['data']['password']=password_hash($data['data']['password'],PASSWORD_DEFAULT);
                  
    //             return $data;
    //             }

    //         }

   
     
 }