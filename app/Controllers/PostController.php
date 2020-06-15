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




                
                    if(isset($_POST["submit"])){

                        
                        $pname= rand(1000,10000)."-".$_FILES["documents"]["name"];
                        $tname=$_FILES["documents"]["tmp_name"];

                        $uploads_dir= $_SERVER['DOCUMENT_ROOT'].'/COVID-19/public/documents/';

                        move_uploaded_file($tname,$uploads_dir.$pname);

                        
                        $dbPost=new PostModel();
                        $db=new UserModel();

                

                // if both uid match
                        $UData=$db->where('uid',$request->getVar('uid'))->first();
                    
                        if(count($UData)>0){
                            $dbIData= [
                                'Address'=>$request->getVar('address'),  
                            ];
                        
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
                            echo "data inset at small table";
                        
                                }else{
                                var_dump($db->erros());
                                die();
                            }

                        
                    
                            
                






                
                        }// post end
                        else{
                            echo "error";
                        }
                }//sesion else end
 
} // upload end






}