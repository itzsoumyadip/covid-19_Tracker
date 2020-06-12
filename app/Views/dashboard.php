<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inform us</title>

    <!-- Font Icon -->
    <!-- <link rel="stylesheet" href="material-design-iconic-font.css">  -->
    
    <!-- Main css -->
    <link rel="stylesheet" href="material-design-color-palette.min.css">
    <link rel="stylesheet" href="animate.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="styless.css">
   <style>
     .sign-in{
        visibility:hidden;              
       }
   </style> 
</head>
<body>

    <div class="main">

    
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">INFROM US</h2>
                    
                    
                        <form  action="<?php echo site_url('PostController/upload') ?>" method="POST" class="register-form" id="register-form" enctype="multipart/form-data" >   
                                                                                                                        <!-- onsubmit="return validate()" -->
                           
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name mdc-text-light-blue"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>

                            
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email animated  bounce  zmdi-hc-lg mdc-text-light-blue"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>

                            
                            <div class="form-group">
                                <label for="address">&nbsp<i class="zmdi  zmdi-pin animated infinite wobble zmdi-hc-lg mdc-text-light-blue" ></i></label>
                                <input type="text" name="address" id="address" placeholder="Your Address"/>
                            </div>


                            suspected details
                              
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name mdc-text-light-blue"></i></label>
                                <input type="text" name="sname" id="name" placeholder="suspectd Name"/>
                            </div>

                            
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email animated  bounce  zmdi-hc-lg mdc-text-light-blue"></i></label>
                                <input type="email" name="semail" id="email" placeholder="suspectd Email"/>
                            </div>

                            
                            <div class="form-group">
                                <label for="address">&nbsp<i class="zmdi  zmdi-pin animated infinite wobble zmdi-hc-lg mdc-text-light-blue" ></i></label>
                                <input type="text" name="sadddress" id="address" placeholder="suspectd Address"/>
                            </div>


                            <div class="form-group">
                                <label for="city">&nbsp<i class="zmdi zmdi-gps-dot zmdi-hc-lg mdc-text-light-blue "></i></label>
                                <input type="city" name="scity" id="city" placeholder="supectd City"/>
                            </div>
                            <div class="form-group">
                                <label for="zipcode">&nbsp<i class="zmdi zmdi-arrows zmdi-hc-lg mdc-text-light-blue"></i></label>
                                <input type="number" name="szipcode" id="zipcode" placeholder="suspectd Zip Code"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="country">&nbsp<i class="zmdi  zmdi-home mdc-text-red zmdi-hc-lg mdc-text-light-blue"></i></label>
                                <input type="text" name="scountry" id="country" placeholder="suspectd Country"/>
                            </div>
                            <div class="form-group">
                                 <div class="gen">
                                    <input type="radio" name="gn" id="gen" value="Male"><i class="zmdi  zmdi-male zmdi-hc-lg mdc-text-light-blue"></i>MALE
                                     <input type="radio" name="gn" value="FeMale"><i class="zmdi  zmdi-female zmdi-hc-lg mdc-text-light-blue"></i>FEMALE
                                 </div>
                            </div>
                            <div class="form-group">
                                <label for="pass">&nbsp<i class="zmdi zmdi-lock zmdi-hc-lg  mdc-text-red"></i></label>
                                <input type="text" name="uid" id="uid" placeholder="Your  User id "/>
                            </div>
                             <div style="border:solid green;"> UPLOD Valid Proof
                                <div class="form-group">
                                    UPLOD Document
                                    <label for="documents"> 
                                    </label>    
                                    <input class="btn btn-primary" type="file" name="documents" id="documents" placeholder="Valid Url"  accept="image/png, image/jpeg,.pdf"/>
                                
                                </div>
                                <div class="form-group">
                                    UPLOD URl
                                    <label for="url"> 
                                    </label>    
                                    <input type="url" name="url" id="url" placeholder="Valid Proof"/>
                                
                                </div>
                        </div>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms  </a></label>
                            </div>
                      
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="post" class="form-submit " value="Post" />
                                                                                                                    <!-- onclick="validate()" -->
                           
                            </div>
                        </form>
                    </div>
                  
                  
                  
                  
                  
                 
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="bootstrap/js/main.js"></script>
</body>
</html>