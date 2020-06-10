<?php namespace App\Controllers;

use App\Models\UserModel;   // for reg and log in 

use App\Models\pDModel;

class Home extends BaseController
{
	

		public function sendmail(){
	   
			
			
$to_email = "monosijchakraborty.2018@gmail.com";
$subject = "Email Test via PHP huhu";
$body = "Hi, pagle mono this is simple test mail by  PHP  mail transfar  ";
$headers = "From:coronamajorproject@gmail.com";  

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed..."; 
}







			//return view('test');
		}



























	public function  reg(){
          
    



		$time= date("his");
		$date=date("Ymd");
		$rand=mt_rand($time,$date);
		
		$uid=$time.$rand.$date;
		
		
		// echo $time;
		// echo "<br>";
		// echo  $date;
		// echo "<br>";
		// echo $rand;
		// echo "<br>";
		// echo $uid;


		// data send to database page

		$request=\Config\Services::request();


				
	
	
		$db=new UserModel();
			$data=[
				'uid'=>$uid,
				'name'=>$request->getVar('name'),  
				'email'=>$request->getVar('email'),
				'password'=>$request->getVar('pass'),
				'phone'=> $request->getVar('phone'),
				'zipCode'=>$request->getVar('zcod'),
				'gender'=>$request->getVar('gender'),



			];

			if($db->save($data)){
				echo "data insert";
				
				
				$name=$request->getVar('name');  
		       $email=$request->getVar('email');
	         	$password=$request->getVar('pass');
		      $phone= $request->getVar('phone');
		       $zip=$request->getVar('zcod');
		     $gender=$request->getVar('gender');

      echo $name .$email.$password .$phone .$zip .$gender;
	   echo "<br>";
	   echo "your user id is".$uid;	
	   echo "<br>";
	   echo $time;	
			
			
			
			
			
			
			
				die();
			}
			else{
				var_dump($db->erros());
				die();
			}
		
		 } 
		//  reg end
		
		

	
	
		public function log(){


			$request=\Config\Services::request();

			$email=$request->getVar('email');
			$password=$request->getVar('pass');

		//	echo $email .$password;
		
			$db=new UserModel();

		

			$user =$db->where('password',$password)->where('email',$email)->first();			
			
		   if(count($user) >0){
			echo "<pre>";
		     print_r($user);
		}else{
			echo 'no records';
		}
		 
		
		
		}








	
	

	
	
	
	





























	//--------------------------------------------------------------------












          // dashboard controller
	

	//--------------------------------------------------------------------

 
	
	
	
	
	
	
	
	
	
	
	
	
	

	



   public function arrFetch(){
	$da=[
		'key'=>[
				'title'=>'laravel',
				'name'=>"saha"
				],
		'se'=>[
			'title'=>'second'
			]		
	];

	//$sa['ds']=$da;
	$sa="test";
		
		// 'srveice'=>["ef","fads"];
	//	echo "<pre>";
      return view('test', $sa );
	
   }













        


  
	
	
	
	public function dashboard(){

    // reciveing data	
  
		$request=\Config\Services::request();
				
		echo $request->getVar('name');  
	
		// sending data to 	 
			 $da=[
				'key'=>[
						'title'=>'laravel',
						'name'=>"saha"]
						
			];
				
				// 'srveice'=>["ef","fads"];
	
			
	
		   return view('dashboard',$da);
		}
	  
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function fetch(){

		$json = file_get_contents('https://api.covid19api.com/summary');
		$obj = json_decode($json);
		echo "<pre>";
		echo print_r($obj);
		echo "</pre>" ;

		//  echo "<pre>";
		// $country =$obj->Countries[76]->Country;
		// echo "<br>";
		// echo $country;
		// echo "<br>";
		// echo print_r($obj->Countries[76]->NewConfirmed);
		// echo "</pre>" ;
	 }
				 
	
	 public function index(){
		$json = file_get_contents('https://api.covid19api.com/summary');
		$obj = json_decode($json);
		$nc=$obj->Global->NewConfirmed;
		
		$db =new pDModel();
			$data=[
			'nc' => $nc,
			'nd' => "15642",
			'nr' => "12523"
		];
	
	if($db->save($data)){
		echo "data insert";
		die();
	}
	else{
		var_dump($db->erros());
		die();
	}
   
}

	public function finds(){
		$db =new pDModel();
		$da=$db->find();
	

		 $sa=['ds'=>$da];
		 return view('test',$sa);
	
	
		// echo "<pre>";
	// 	return view('test',$da[0]);
	// //  echo print_r($da); 
	// 	echo "</pre>";
	
	
	
	}







	public function dashboards()
	{
		return view('index2');
	}




public function prevention()
{
	return view('prevention');
}

public function symptom()
{
	return view('symptom');
}


	
}















	
?>


















