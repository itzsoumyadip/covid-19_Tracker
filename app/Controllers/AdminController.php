<?php namespace App\Controllers;

set_time_limit(300);





use App\Models\UserModel;
use App\Models\ULogModel;
use App\Models\PostModel;

class AdminController extends BaseController
{
  public function index(){
    $data=[];
     $spin=[];
     $cpin=[];
     $mhF=[];     // take care the msg for match found

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

                        $maildata=$clientData->where('zipCode',$match)->findAll();

                         for($i=0;$i<count($maildata);$i++){
                              // echo "<pre>";
                              //   print_r($maildata[$i]['email']);
                              //   print_r($maildata[$i]['name']);



                              $to_email = $maildata[$i]['email'];
                              $subject = "CORONA FOUND ON YOUR AREA ";
                              $body = "HI ". $maildata[$i]['name'] . " hope you are good but be aware because corona have been Found on your area code:-". $cpin[$j];
                              $headers = "From:coronamajorproject@gmail.com";  

                              if (mail($to_email, $subject, $body, $headers)) {
                                  echo "Email successfully sent to $to_email...";
                              } else {
                                  echo "Email sending failed..."; 
                              } // mail else end
                       
                       
                       
                       
                          }// takaing out  email data for the match pin from user data loop   
                 
                 
                 
                 
                 
                      


            }// matching the pin end
            else{ $mhF[]="no match found";}
          }// end loping user pin  wih found susped pin

       }//end  loop for suspected pin code finder loop 
 
        

      
        

       $pin["sdata"]=$spin; 
       $pin["cdata"]=$cpin; 
       $pin["match"]=$mhF;

       $data['pin']=$pin;
       







     return view('AdninMailSend',$data);

 
 
 
 
 
 
 
    }


  

}