<html>
<head>
		<title> </title>
		<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=WT02ury3R9nvvbjVsnU73tBx78cNQzRa-nj5ylELbp-5iirDj2131E-OluMpJ1OFE2hm8WOZYOT6EjcC_qESQIg2N27aa62xTLit-Xh0H-NAzUGU5T_pzW3cKmQBG8NBBZ7MLP1-Cz-6Flv9_2rP7ZQLok9azR572aTsbioY1qcJd7yH4gJX866kRnwaAlvGyLx1A6ngISir8PtaIVRgVuU1L1YnQ7gYRRiwEch5IO0KTx0D9Q5xWMfrf9ivZNgpz62ttUD3fKAwyfEPM4F7JbGAPf-llBgwKPsUD4lFzKkk_0UpnERpkj-_wtdFgNyISanggNMhSiLWmBmc9i4EVvU0Amy_syOEhdIgseGT_oV74nrAkx0uqVom81Wipy9w5EBV_lXahWngYMAoMguRd_39s2bW80xxSYvfKuNMxSC23vzVCV2ngo8BoUZ3gXRInzXiPODyWZk4rUO6wVc82A" charset="UTF-8"></script><?php include 'link/links.php';	?>
    <?php include 'css/style.php'; ?>
    <style>
      .carousel-inner img {
    width: 100%;
    height: 75%;
  }
    </style>
</head>
	<body onload="fetch()"> 

    <div id="loading"></div>

		<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#"><img src="images/techno.png" width="30" height="30">&nbsp;&nbsp;COVID-19</a>
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
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/about.png" alt="Los Angeles" width="1400" height="500">
      <div class="carousel-caption">
        <a href="about.php">About</a>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/symtomps.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
         <a href="symptom.php">Symtomps</a>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/prevention.png" alt="New York" width="1100" height="500">
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
              <img src="images/unity.png" width="300" height="300">

          </div>
        </div>

          <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
            <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
              <h1>Let's Stay Safe & Fight Together Against The Cor<span class="corona_rotate"><img src="images/coronalogo.png" width="40" height="40"></span>na Virus</h1>

            </div>

          </div>

    </div>



</div>
        
        <!--*************************corona latest updates*****************-->
        
        <section class="corona_update container-fluid">
            <div class="mb-3">
                <h3 class="text-uppercase text-center">COVID-19 WORLDWIDE UPDATES</h3>
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
		
    <script>
      
      var preloader = document.getElementById('loading');
      function myFunc(){
        preloader.style.display = 'none';
      }
        
        
    function fetch(){
        
        $.get("https://api.covid19api.com/summary", 
             
             function (data){
                // console.log(data['Countries'].length);
            var tbval = document.getElementById('tbval');
            for(var i=1; i<(data['Countries'].length); i++){
                
                    var x = tbval.insertRow();
                    x.insertCell(0);

                    tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                    tbval.rows[i].cells[0].style.background = '#7a4a91';
                    tbval.rows[i].cells[0].style.color = '#fff';

                    x.insertCell(1);
                    tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                    tbval.rows[i].cells[1].style.background = '#4bb7d8';

                     x.insertCell(2);
                    tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                    tbval.rows[i].cells[2].style.background = '#4bb7d8';

                     x.insertCell(3);
                    tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                    tbval.rows[i].cells[3].style.background = '#f36e23';

                     x.insertCell(4);
                    tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfimed'];
                    tbval.rows[i].cells[4].style.background = '#4bb7d8';

                     x.insertCell(5);
                    tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                    tbval.rows[i].cells[5].style.background = '#9cc850';

                     x.insertCell(6);
                    tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                    tbval.rows[i].cells[6].style.background = '#f36e23';

                
                
                    }
            
                }
             );
        
        
    }

    </script>

	</body>
</html>