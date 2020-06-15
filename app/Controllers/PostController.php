<?php namespace App\Controllers;

use App\Models\PostModel;
use App\Models\UserModel; 

class PostController extends BaseController
{      
	
 public function index(){

       if(!session()->get('isLoggedIn')){
             return redirect()->to( base_url('covid'));
         }else{    


        return view('dashboard');
       }
 }

 public function upload(){

           if(!session()->get('isLoggedIn')){
                return redirect()->to( base_url('covid'));
           }else{    
                    $request=\Config\Services::request();
                    helper(['form']);
                   $data=[];
                
                    $rules=[
                      
                        
                        'address'=>'required|min_length[2]|max_length[250]',
                        'sname'=>'min_length[3]|max_length[99]' ,
                        'semail'=>'min_length[6]|max_length[50]|valid_email',
                        'saddress'=>'min_length[0]|max_length[250]',
                        'scity'=>'min_length[2]|max_length[250]',
                        'szipcode'=>'required',
                        'uid'=>'required',
                    ];

                    if( ! $this->validate($rules)){
                        $data=[
                            'validation'=>$this->validator,
                        ];
                    }else{



                
                    if(isset($_POST["submit"])){

                        
                        $pname= rand(1000,10000)."-".$_FILES["documents"]["name"];
                        $tname=$_FILES["documents"]["tmp_name"];

                        $uploads_dir= $_SERVER['DOCUMENT_ROOT'].'/COVID-19/public/documents/';

                        move_uploaded_file($tname,$uploads_dir.$pname);

                        
                        $dbPost=new PostModel();
                        $db=new UserModel();

                

                // if both uid match  address insert
                        $UData=$db->where('uid',$request->getVar('uid'))->first();
                    
                        if(count($UData)>0){
                            $dbIData= [
                                'Address'=>$request->getVar('address'),  
                            ];
                        
                            session()->set($dbIData);

                                if($db->update($UData['id'],$dbIData)){
                                            echo "update";
                                            
                                    
                                    }else{
                                        var_dump($db->erros());
                                        die();
                                    } }
                                            
                        
                        $dbIPost=[
                            'uid'=>$request->getVar('uid'), 
                            'suspect_name'=>$request->getVar('sname'),  
                            'suspect_email'=>$request->getVar('semail'),
                            'suspect_addres'=>$request->getVar('sadddress'),
                            'suspect_city'=>$request->getVar('scity'),
                            'suspect_zipCode'=>$request->getVar('szipcode'),
                            'suspect_country'=>$request->getVar('scountry'),
                            'gender'=>$request->getVar('gn'),
                            'suspect_doc'=>$pname,
                            'suspect_url'=>$request->getVar('url'),
                        ];
                        
                        
                    
                        if($dbPost->save($dbIPost)){
                                 echo "data insertd  successfully ";
                            return redirect()->to( base_url('inform'));

                        
                                }else{
                                var_dump($db->erros());
                                die();
                            }

                        
                    
                            
                






                
                        }// post end
                        else{
                            echo "error";
                        }
                    }
                    return view('dashboard',$data);
                }//sesion else end
 
} // upload end






}