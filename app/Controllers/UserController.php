<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ULogModel;

class UserController extends BaseController
{

    public function sign()
	{   //log and reg  view page
		return view('reg_log');
	}


    public function register(){
        $request=\Config\Services::request();
        $data=[];
        helper(['form']);

        if($this->request->getMethod()=='post'){
            
            
            //for user data table
            $rules=[
                'name'=>'required|min_length[5]|max_length[99]' ,
                'email'=>'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password'=>'required|min_length[8]|max_length[250]',
                'confirmPassword'=> 'matches[password]',
                'phone'=>'required|min_length[10]|max_length[13]',
                'zipcode'=>'required',
            ];
         
         if( ! $this->validate($rules)){
             $data=[
                 'validation'=>$this->validator,
             ];
         }else{
            //push data now

            
            $time= date("his");
            $date=date("Ymd");
            $rand=mt_rand($time,$date);
            
            $uid=$time.$rand.$date;
                

            $db=new UserModel();  // all  user  data tABALE
            $dbulog=new  ULogModel(); // user login table



             
            $dbIData=[
                'uid'=>$uid,
				'name'=>$request->getVar('name'),  
				'email'=>$request->getVar('email'),
				'password'=>password_hash($request->getVar('password'),PASSWORD_DEFAULT),
				'phone'=> $request->getVar('phone'),
				'zipCode'=>$request->getVar('zipcode'),
				'gender'=>$request->getVar('gender'),
            ];
            $dbIULog=[
                'uid'=>$uid,
				
				'email'=>$request->getVar('email'),
				'password'=>password_hash($request->getVar('password'),PASSWORD_DEFAULT),
				'phone'=> $request->getVar('phone'),
				'isAddmin'=>0,
                'isUser'=>1,
                              
            ];
            
          
            
            if($db->save($dbIData)){
                       if($dbulog->save($dbIULog)){
                                echo "data inset at small table";
                            }else{
                                var_dump($db->erros());
                                die();
                            } 
              
              
                        echo "data insert";
                        $session=session();
                        $session->setFlashdata('sucess','Registration Sucessful');
                                    
                    
                        return redirect()->to(base_url('covid'));
                        die(); 
            } 
            else{
				var_dump($db->erros());
				die();
			}   
                


        } //post end

       return view('reg_log',$data);


    }

 }  // reg end  

public function log(){

    $request=\Config\Services::request();
    $data=[];
        helper(['form']);

        if($this->request->getMethod()=='post'){

        
            $rules=[
                'email'=>'required|min_length[6]|max_length[50]|valid_email',
                'password'=>'required|min_length[8]|max_length[250]',
                       
            ];
            if( ! $this->validate($rules)){
                $data=[
                    'validation'=>$this->validator,
                ];
            }else{

                $dbGLog=new ULogModel();    // USER LOGIN TABLE

                $email=$request->getVar('email');
                $password=$request->getVar('password');
               
               
                $user =$dbGLog->where('email',$email)->first();  // getig user data from user log Table
               
               if(password_verify($password,$user['password'])){
                    if(count($user) >0){
                            // echo "<pre>";
                            //  print_r($user);
                   
                   
                           $dbGUD=new  UserModel();   // ALL USER DATA TABLE

                           $UData=$dbGUD->where('uid',$user['uid'])->first();     // geting all info from user data table accordi

                                                if(count($UData) >0){                /// to check if data is also in Main user data table   
                                        
                                                        $this->setUserSession($UData);
                                                
                                                        return redirect()->to( base_url('/'));
                                                    }else{
                                                        echo "no data in our main server";
                                                        }
                                        
                
                          }else{
                             echo "<div class=\"alert alert-danger\">Incorrect password try again </div>";
                         }  
                }else{
                      echo "<div class=\"alert alert-danger\">NO records found  please Register again </div>";
                    }



            }
}
        return view('reg_log',$data);


} //log end

       ///session function

    private function setUserSession($user){
     $sesionData=[
        'id'=>$user['id'],
        'uid'=>$user['uid'],
        'name'=>$user['name'],
        'email'=>$user['email'],
        'password'=>$user['id'],
        'phone'=>$user['phone'],
        'zipCode'=>$user['zipCode'],
        'gender'=>$user['gender'],
        // 'isAddmin'=>$user['isAddmin'],      // use when new  coloum  will be introduced in user table
        // 'isUser'=>$user['isUser'],
         
        'isLoggedIn'=>true,
     ];

     session()->set($sesionData);
     return true;
    }
       //session end 


 

        public function logout(){
            
            session()->destroy();
            return redirect()->to(base_url('covid'));
        }





           ///for test pourpous
           public function test(){
            return view('test');
        }


}




































