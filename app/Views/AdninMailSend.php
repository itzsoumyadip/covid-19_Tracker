<?php // session()->get('isAdmin') ?>
<?php //  session()->get('name') ?>

<?php 

            echo "<h1> suspectd zip </h1>";
         for($i=0;$i<count($pin['sdata']);$i++){
               echo  $pin['sdata'][$i];
         echo "<br>";
         }
           echo "<h1> client zip </h1>";
         for($i=0;$i<count($pin['cdata']);$i++){
            echo  $pin['cdata'][$i];
      echo "<br>";
      }

      echo "<h1> MAtch ? </h1>";
      for($i=0;$i<count($pin['match']);$i++){
            if($pin['match'][$i]=="no match found"){
                   continue;
            }else{
                echo $pin['match'][$i]; 
               
            }
  echo "<br>";
  }







        // echo "<pre>";
        //  print_r($pin)
?>