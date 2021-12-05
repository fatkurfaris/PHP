<?php 
include "php/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lanana.idn</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styl.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/stylee.css">
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">lanana.idn</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Product</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="php/login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Lanana.idn</div>
                <div class="masthead-heading text-uppercase">Just Check Our Product</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Check Out</a>
            </div>
        </header>
        <!-- Portfolio Grid-->
         <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Product</h2>
                        <h3 class="section-subheading text-muted">Lanana.idn Best Seller</h3>
                    </div>
                    <div class="row">
                <?php //4
                 $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='4'");
                 while ($a=mysqli_fetch_array($query)) {
                    ?> 
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4"> 
                                <img class="img-fluid" src="assets/img/lanana/<?php echo $a['gambar2']; ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>

                    </div>
                <?php } ?>

                <?php //5
                 $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='5'");
                 while ($a=mysqli_fetch_array($query)) {
                    ?> 
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5"> 
                                <img class="img-fluid" src="assets/img/lanana/<?php echo $a['gambar2']; ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>

                    </div>
                <?php } ?>

                <?php //
                 $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='6'");
                 while ($a=mysqli_fetch_array($query)) {
                    ?> 
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6"> 
                                <img class="img-fluid" src="assets/img/lanana/<?php echo $a['gambar2']; ?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
                 </div>
                 <div class="text-center">
                    <h3 class="section-heading text-uppercase">Wanna See The Other Product?</h3>
                    <h3 class="section-subheading text-muted">Just Login <a href="php/login.php">Here</a></h3>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Or contact here</h2>
                    <a href="https://api.whatsapp.com/send?phone=628592917466&text=Nama+%3A%0AAlamat+%3A%0APesanan" title=""><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Whatsaap</button></a>
                </div>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <?php  
         $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='4' ");
         while ($a=mysqli_fetch_array($query)) { ?> 
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase"><?php echo $a['nama']; ?></h2>
                                    <p class="item-intro text-muted">Rp.<?php echo $a['harga']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="img/<?php echo $a['gambar2'] ?>" />
                                    <p>deskrpisi </p>
                                    <ul class="list-inline">
                                        <li>deskrpisi</li>
                                        <li>deskrpisi</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Product
                                    </button>
                                        
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <?php }?>
         <!-- Modal 2-->
        <?php  
         $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='5' ");
         while ($a=mysqli_fetch_array($query)) { ?> 
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase"><?php echo $a['nama']; ?></h2>
                                    <p class="item-intro text-muted">Rp.<?php echo $a['harga']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="img/<?php echo $a['gambar2'] ?>" />
                                    <p>deskrpisi </p>
                                    <ul class="list-inline">
                                        <li>deskrpisi</li>
                                        <li>deskrpisi</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Product
                                    </button>
                                        
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>

    <!-- Modal 3-->
         <?php  
         $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='6'");
         while ($a=mysqli_fetch_array($query)) { 
                ?> 
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase"><?php echo $a['nama']; ?></h2>
                                    <p class="item-intro text-muted">Rp.<?php echo $a['harga']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="img/<?php echo $a['gambar2'] ?>" />
                                    <p>deskrpisi</p>
                                    <ul class="list-inline">
                                        <li>deskrpisi</li>
                                        <li>deskrpisi</li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Close Product
                                    </button>
                                        
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <?php }?>

        <!-- Bootstrap core JS-->
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
