<?php 
	session_start();
	include "php/koneksi.php";
	if(empty($_SESSION['username'])){
	header("location:index.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-5.0.0-beta3-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/stylee.css">
	<title>admin</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-dark">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="admin.php"><b>Home</b></a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
   		 	</button>
    			<div class="collapse navbar-collapse" id="navbarText">
      				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        				<li class="nav-item">
          					<a class="nav-link active" aria-current="page" href="php/logout.php"><b>logout</b></a>
        				</li>
      				</ul>
       			 <h4><u><i class="tulisan4">Admin</i></u></h4> 
    			</div>
  		</div>
	</nav>
<!-- Section -->
<header class="masthead">
<div class="mashead-subheading">
  <div class="container">
    <div class="masthead-heading text-uppercase">hi  welcome to my website</div>
    <div class="masthead-heading2"><i><b>Click Button Bellow For My</b></i></div>
    <a href="#photography"><button type="button" class="btn btn-primary btn-lg" ><i><b>PHOTOGRAPHY</b></i></button></a>
    <a href="#profile" ><button type="button" class="btn btn-primary btn-lg" ><i><b>PROFILES</b></i></button></a>
    <a href="#business" ><button type="button" class="btn btn-primary btn-lg" ><i><b>BUSSINES</b></i></button></a>
  </div>
</div>	
</header>
<!--  -->

<!--Photography--> 
<section id="photography">
<div class=" bg-light bawah2">
<div class="container">
<h1 class="tulisan2"><b>PHOTOGRAPHY</b></h1>
    <div class="row samping">
    	<div class="col-6 col-md-4 ">
        	<div class="card" style="width: 18rem;">
  				<img src="img/Sport_4.png" class="card-img-top" alt="...">
  					<div class="card-body">
    					<a href="photography_sport_admin.php" title=""><h4 class="tulis" align="center"><b>SPORT</b></h4></a>
 					</div>
			</div>
    	</div>
    	<div class="col-6 col-md-4 ">
        	<div class="card" style="width: 18rem;">
  				<img src="img/Food_2.png" class="card-img-top" alt="...">
  					<div class="card-body">
    					<a href="photography_food_admin.php" title=""><h4 class="tulis" align="center"><b>FOOD</b></h4></a>
 					</div>
			</div>
    	</div>
    	<div class="col-6 col-md-4 bawah2 ">
       		<div class="card" style="width: 18rem;">
  	 			<img src="img/Photo_6.png" class="card-img-top" alt="...">
  					<div class="card-body ">
    					<a href="photography_photo_admin.php" title=""><h4 class="tulis" align="center"><b>Photo</b></h4></a>
 					</div >
			</div>
    	</div>
  	</div>
  	<div align="center">
  	    <a href="php/input.php" ><button type="button" class="btn btn-secondary btn-lg" ><i><b>New Input</b></i></button></a>
  	</div>
</div>	
</div>
</section>
<!--  -->

<!-- Profile -->
<section id="profile">
<div class="bg-" >
	<h1 align="center" class="jarak"><b>PROFILES</b></h1>
	<div class="container">
		<div class="row	">
		<div class="col-4 bawah2 " align="">
			<img class="gambar" border="5px"  src="img/farisedit.png">
		</div>
			<div class="col-6 ">
				<h4 class="jarak">HI! A little bit about me...</h4>
        		<h6 class="">Allow me to make an introduction to who I am. My name is Fatkur Rizal Rochmadian Putra, but usually my friends call me Faris. I am the fourth of four children. I wan born in Bontang, Desember 2000. Now i live at Yogyakarta. Because now i Currently pursuing bachelor degree in National Veteran University Yogyakarta   </h6>
        		<h6 class="">Speaking of Hobby, Music is one of my hobbies. Althought that i can play guitar a little bit, i really like listen some kind of music. I think listen some music can help me more enjoy what i'm doing.  </h6>
        		<p></p>
        		<h6>Contact Person : </h6>
  				<a href="https://www.instagram.com/fatkurfaris/"></i><img src="img/instagram.jpg" alt="" width="4%"></a>
        		<a href="https://www.facebook.com/fatkur.rizal.5/"></i><img src="img/facebook.png" alt="" width="4%"></a>                    
        		<a href="https://api.whatsapp.com/send?phone=6285388187787"></i><img src="img/whatsapp.png" alt="" width="4%"></a>               
			</div>
		</div>
	</div>	
</div>
</section>
<!--  -->

<!-- BUSINESEE -->
<section id="business">
    <div class="bg-dark ">
  		<div class="container bawah jarak">	
      	<h1 align="center" class="jarak tulisan3 bawah2"><b>BUSINISESS </b></h1>
      		<div class="row">
        		<div align="right" class=" col-7">
          			<img class="rounded-circle gambar2" border="11px" src="img/3.png" alt="" width="27%" >
        		</div>
        		<div class="col-sm tulisan5" align="center"> 
          			<h4 class="tulisan5 atas3" align=""><b>-----------Sfchickenn----------</b></h4>   
          			<h5 class="tulisan5 " align=""> Since 2017-2020 (break)</h5> 
          			<h4 class="tulisan5 atas3" align=""> <a href="https://www.instagram.com/sfchickenn/"></i><img src="img/instagram.jpg" alt="" width="4%">@Sfchickenn </a> </h4> 
          			<h4 class="tulisan5 atas3" align=""> CEO & Founder of Sfchickenn</h4> 
      			</div>
        	</div>
       		<div class="atas3">
           		<?php $i=1;
              		do {  $i++; ?>
                		<div class="jarak2" align="center">
                  			<h2 class="tulisan3 ">|</h2>
                		</div>
            	<?php } while ( $i <= 5); ?>
        	</div>

        <div class="row">
            <div align="center" class=" col-sm">
          		<h4 class="tulisan5 atas3" align=""><b>---Alexandria Florists---</b> </h4>   
         		<h5 class="tulisan5 " align=""> Since 2016-Now</h5> 
          		<h4 class="tulisan5 atas3" align=""> <a href="https://www.instagram.com/alexandria_florist/"></i><img src="img/instagram.jpg" alt="" width="4%">@Alexandria_Florist </a> </h4> 
          		<h4 class="tulisan5 atas3" align="">Assistant & Administrator</h4> 
      		</div>
          	<div class="col-7 tulisan5"> 
          		<img class="rounded-circle gambar2" border="11px" src="img/alexandria.png" alt="" width="27%" >
        	</div> 
        </div>
        <div class="atas3">
            <?php $i=1;
            	do {  $i++; ?>
              	<div class="jarak2" align="center">
                	<h2 class="tulisan3 ">|</h2>
              	</div>
          	<?php } while ( $i <= 5); ?>
        </div>
        <div class="row">
        	<div align="right" class=" col-7">
          		<img class="rounded-circle gambar2" border="11px" src="img/lanana.png" alt="" width="27%" >
        	</div>
        	<div class="col-sm tulisan5" align="center"> 
          		<h4 class="tulisan5 atas3" align=""> <b>-----Lanana.idn-----</b></h4>   
          		<h5 class="tulisan5 " align=""> Since 2020-Now</h5> 
          		<h4 class="tulisan5 atas3" align=""> <a href="https://www.instagram.com/lanana.idn/"></i><img src="img/instagram.jpg" alt="" width="4%">@Lanana.idn </a> </h4>
          		<h4 class="tulisan5 atas3" align=""> Web Desinner (on progress)</h4> 
      		</div>
        </div>
        <div class="bawah2"></div>
    	</div>    
    </div>
</section>
        
<!-- Taskbar -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h5 align="center" class="tulisan4 jarak3"><i><b>2021--Fatkur Rizal Rochmadian Putra--2021 </b></i><a class=""href="#" role=""><b>Home</b></a></h5>   
      </div>
      </div>     
    </div>
</section>        
</body>
</html>