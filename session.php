<?php 
	session_start();
	include "php/koneksi.php";
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
	header("location:/index.html?pesan=belum_login");
    $i=0;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
	    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SessionAdmin</title>

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styl.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Lanana.idn</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Product</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="data.php">Data</a>
                         </li>
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="pengguna.php">Pengguna</a>
                    </li>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="php/logout.php">Logout</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
            <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome Here <?php echo $username ?></div>

                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#pemesanan">Check Order</a>
            </div>
        </header>
<!-- Portfolio Grid-->
            <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Product</h2>
                        <h3 class="section-subheading text-muted">Lanana.idn Product</h3>
                    </div>
                    <div class="row">
                <?php  
                 $query = mysqli_query($konek,"SELECT * FROM menu");
                 while ($a=mysqli_fetch_array($query)) { ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">            
                                <img class="img-fluid" src="assets/img/Lanana/<?php echo $a['gambar2']; ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                 </div>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>


	


	