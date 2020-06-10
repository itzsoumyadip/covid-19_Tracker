<?= $this->extend('/layout/base.php') ?>

<?= $this->section('content') ?>



<div class="cont">

		<!-- log -->


<form action=<?php echo site_url('UserController/log') ?>  method="POST">
  <div class="form sign-in">
    <h2>Welcome back,</h2>
    <label>
      <span>Email</span>
      <input type="email" name="email"/>
    </label>
    <label>
      <span>Password</span>
      <input type="password" name="password" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <button type="submit" class="submit">Sign In</button>
    <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
  </div>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
</form>


   <!-- reg -->

<form  action=<?php echo site_url('UserController/register') ?>  method="POST" >

    <div class="form sign-up">
      <h2>#STAY HOME STAY SAFE,</h2>
      <label>
        <span>Name</span>
        <input type="text" name="name"/>
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password"/>
      </label>
	  <label>
        <span>confirm Password</span>
        <input type="password" name="confirmPassword"/>
      </label>
	  <label>
        <span>Phone </span>
        <input type="tel" name="phone"  />
		<!-- pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" --> 
      </label>
	  
	  <label>
        <span>ZIP CODE</span>
        <input type="number" name="zipcode"/>
      </label>
	
	
	 <label>
	   <span>Gender</span>
	 </lable>  
	   <div class="row ">
	    <div class="col sm-6 custom-control custom-radio">
	    <input type="radio" class="custom-control-input" id="customRadio"  name="gender" value="male" >
		<label class="custom-control-label t" for="customRadio">Male </lable>
		</div>
		
	 	
		 <div class="col sm-6  custom-control custom-radio">
		<input type="radio" class="custom-control-input" id="customRadi" name="gender" value="female" > 
		<label class="custom-control-label t" for="customRadi">Female</lable> 
     
	 
	    </div>
	  	
	 	
      <button type="submit" class="submit">Sign Up</button>
	  <input class="btn btn-danger" type="submit" value="go" >
      <button type="button" class="fb-btn">Join with <span>facebook</span></button>
    </div>
  </div>
</form>

</div>





<script>
</script>


<?= $this->endSection() ?>






