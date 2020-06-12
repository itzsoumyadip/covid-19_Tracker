<?php namespace App\Controllers;

set_time_limit(300);





use App\Models\UserModel;
use App\Models\ULogModel;
use App\Models\PostModel;

class AdminController extends BaseController
{
  public function index(){
                  
    
    if(!session()->get('isLoggedIn') && !session()->get('isAdmin') ){
      return redirect()->to( base_url('covid'));
  }else{    

    
    
    
                  $data=[];
                  $spin=[];
                  $cpin=[];
                  $mhF=[];     // take care the msg for match found
                  $mpin=[];

                    $clientData=new UserModel();
                    $suspectData=new PostModel();

                  /// suspectd pin chek
                  $suspectPin=$suspectData->findAll();
                    for($i=0;$i<count($suspectPin);$i++){
                          
                      
                      $spin[]=$suspectPin[$i]['suspect_zipCode'];


                    }
                      
                    //  echo "<pre>";
                    //  print_r($spin);

                  //  client pin check
                    $clientPin=$clientData->findAll();
                    for($i=0;$i<count($clientPin);$i++){
                          
                      
                      $cpin[]=$clientPin[$i]['zipCode'];

                    }
                    //  echo "<pre>";
                    //  print_r($cpin);

                      // pin matched 
                    for($i=0;$i<count($spin);$i++){

                          $match=$spin[$i];   //  $match save the pin temporay so that loop  does not go over again again  if  if($scpin[i]==$cpin[$j]) was use
                      for($j=0;$j<count($cpin);$j++){
                          if($match==$cpin[$j]){        // 
                                $mhF[]="match found on zipCode:-". $cpin[$j];   

                                $mpin[]=$cpin[$j];  



                                     
                          }// matching the pin end
                          else{ $mhF[]="no match found";}
                        }// end loping user pin  wih found susped pin

                    }//end  loop for suspected pin code finder loop 
              
                      

                         
                      

                    $pin["sdata"]=$spin; 
                    $pin["cdata"]=$cpin; 
                    $pin["match"]=$mhF;

                    $data['pin']=$pin;
                    



                   $tmpin=array_unique($mpin);
                   foreach ($tmpin as $key) {
                          $rmpin[]=$key;
                   }
                   

                    if(count($rmpin)>0){
                          $this->msendr($rmpin,$clientData);
                    }


                  return view('AdninMailSend',$data);

                  }//session ends 
 
 
 


 
    }// index ends

      private function msendr($rmpin,$clientData){
       // print_r($rmpin);
            for($l=0;$l<count($rmpin);$l++){                  // nuber of times unique have prsent 
                       $maildata=$clientData->where('zipCode',$rmpin[$l])->findAll();

                       for($k=0;$k<count($maildata);$k++){        // nubber of user have same pin loop runs
                          
                      //       //  test code 
                      //       echo "<pre>";
                      //         print_r($maildata[$k]['email']." i= " . $k);
                      //         print_r($maildata[$k]['name']." i= " . $k ); }
                            
                            //   echo count($maildata)."<br>";
                            //    print_r($maildata);
                      //      echo "<br>".$l."<br>";
                        //       echo "<pre>";
                          //     print_r($rmpin[$l]);
                            



                            $to_email = $maildata[$k]['email'];
                            $subject = "CORONA FOUND ON YOUR AREA ";
                            $body = "HI ". $maildata[$k]['name'] . " hope you are good but be aware because corona have been Found on your area code:-". $rmpin[$l];
                            $headers = "From:coronamajorproject@gmail.com";  

                            if (mail($to_email, $subject, $body, $headers)) {
                                echo "Email successfully sent to $to_email...";
                            } else {
                                echo "Email sending failed..."; 
                            } // mail else end
                    
                    
                    
                    
                        }//mail for end takaing out  email data for the match pin from user data loop   


     }//rpin loop end
    }// msender end

}

