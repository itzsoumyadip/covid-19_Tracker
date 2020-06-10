<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  rel="stylesheet" href="<?php echo base_url('public/bootstrap/bootstrap.min.css'); ?>" > 
</head>
<body>
    



  <form  action=<?php echo site_url('Home/dashboard') ?>  method="POST" >
     
 
     <?php foreach($key as $keys): ?> 
          <h1><?php echo $keys; ?></h1>
     <?php endforeach;   ?>

      <input  type="text"name="name" >
    <input class="btn btn-danger" type="submit" value="go" >
  </form>    


</body>
</html>