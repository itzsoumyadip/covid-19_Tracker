<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin</title>
  
      <link rel="stylesheet" href="<?php echo base_url('public/asset/css/AdminMail.css') ?>">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
<?php  if(session()->get('sucess')): ?>
<div class="alert alert-success" role="alert">
			<?= session()->get('sucess');?>
		</div>

            </div>
<?php endif; ?>

<?php  if(session()->get('fail')): ?>
<div class="alert alert-danger" role="alert">
			<?= session()->get('fail');?>
		</div>

            </div>
<?php endif; ?>

<?php // session()->get('isAdmin') ?>
<?php //  session()->get('name') ?>



<div class="card-deck">

<div class="card" style="width: 20rem;">
<div class="card-header border-success">
    <h5 class="card-title"> Available suspected Zip Code </h5>
  </div>

 <div class="card-body">
 
 <ul class="list-group list-group-flush">

<?php 
for($i=0;$i<count($pin['sdata']);$i++){

      echo  "<li class=\"list-group-item\">".$pin['sdata'][$i];


}

?> 
</ul>

 
 </div>
</div>


      
<div class="card" style="width: 20rem;">
<div class="card-header border-success">
    <h5 class="card-title "> Our  Client Zip  Code </h5>
  </div>

 <div class="card-body bg-transparent">
 
 <ul class="list-group list-group-flush">

<?php 
 for($i=0;$i<count($pin['cdata']);$i++){

      echo  "<li class=\"list-group-item\">". $pin['cdata'][$i];


}

?> 
</ul>

 
 </div>
</div>

</div>







</div>
</div>


      
<div class="card text-center my-5" >
<div class="card-header border-success">
    <h5 class="card-title ">Matches Found </h5>
  </div>

 <div class="card-body bg-transparent">
 
 <ul class="list-group list-group-flush">

<?php 
for($i=0;$i<count($pin['match']);$i++){
      if($pin['match'][$i]=="no match found"){
             continue;
      }else{
      echo  "<li class=\"list-group-item\">".  $pin['match'][$i]; 
                  }
            }
?> 
</ul>

 
 </div>
</div>

         
      
</body>

<footer>
<button type="button" class="btn btn-danger btn-lg donload-button">
          <a href="<?= base_url('logout')?>">Logout</a></button>

</footer>
</html>






