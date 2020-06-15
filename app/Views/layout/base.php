<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid19 - Log in or Sign up</title>
</head>
<!-- f -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <!-- b -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/asset/css/style.css')?>">
<body>


<div>



	<?php if (isset($validation)): ?> 
		<div class="col-12">
			<div class="alert alert-danger" role="alert">
				<?= $validation->listErrors(); ?>
			</div>
		</div>
	<?php elseif(session()->get('sucess')): ?>

		<div class="alert alert-success" role="alert">
			<?= session()->get('sucess');?>

		</div>
	<?php else: ?>
			<p class="tip"></p>
	<?php endif; ?>





</div>   

<div> 
	<h1><?php session()->get('name') ?> </h1>
</div>



<?= $this->renderSection('content') ?>





</body>

<?= include 'footer.php' ?>


</html>