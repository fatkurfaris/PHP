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
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Homepage/Lanana.idn</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styl.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <!-- Navigation-->
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pemesanan.php">Pemesanan</a></li>
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="php/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome Here <?php echo $username ?></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Check Product</a>
            </div>
        </header>
        <!-- Portfolio Grid-->
        <form action="php/prosescheckout.php" method="POST" >
        <input  type="hidden" name="user" value="<?php echo $username?>">
         <section class="page-section bg-light" id="portfolio">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Product</h2>
                        <h3 class="section-subheading text-muted">Lanana.idn Product</h3>
                    </div>
                    <div class="row">
                 <?php //1
                 $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='1'");
                 while ($a=mysqli_fetch_array($query)) {
                    ?> 
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"> 
                                <img class="img-fluid" src="assets/img/Lanana/gambar1edit.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> 
                                	<div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div> 
                                	<input  type="hidden" name="harga1" value="<?php echo $a['harga']; ?>">
                                </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                                <input class="tulisan "type="number" value="0" name="jumlah1" placeholder="jumlah" min="0">
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php //2
                 $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='2'");
                 while ($a=mysqli_fetch_array($query)) {
                    ?> 
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"> 
                                <img class="img-fluid" src="assets/img/Lanana/gambar2edit.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> 
                                	<div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div> 
                                	<input  type="hidden" name="harga2" value="<?php echo $a['harga']; ?>">
                                </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                                <input class="tulisan "type="number" value="0" name="jumlah2" placeholder="jumlah" min="0">
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php //3
                 $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='3'");
                 while ($a=mysqli_fetch_array($query)) {
                    ?> 
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3"> 
                                <img class="img-fluid" src="assets/img/Lanana/gambar3edit.png?>" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> 
                                	<div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div> 
                                	<input  type="hidden" name="harga3" value="<?php echo $a['harga']; ?>">
                                </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                                <input class="tulisan "type="number" value="0" name="jumlah3" placeholder="jumlah" min="0">
                            </div>
                        </div>

                    </div>
                <?php } ?>

                <?php //4
                 $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='4'");
                 while ($a=mysqli_fetch_array($query)) {
                    ?> 
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4"> 
                                <img class="img-fluid" src="assets/img/Lanana/gambar4edit.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> 
                                	<div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div> 
                                	<input  type="hidden" name="harga4" value="<?php echo $a['harga']; ?>">
                                </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                                <input class="tulisan "type="number" value="0" name="jumlah4" placeholder="jumlah" min="0">
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
                                <img class="img-fluid" src="assets/img/Lanana/gambar5edit.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> 
                                	<div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div> 
                                	<input  type="hidden" name="harga5" value="<?php echo $a['harga']; ?>">
                                </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                                <input class="tulisan "type="number" value="0" name="jumlah5" placeholder="jumlah" min="0">
                            </div>
                        </div>

                    </div>
                <?php } ?>

                <?php // 6
                 $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='6'");
                 while ($a=mysqli_fetch_array($query)) {
                    ?> 
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6"> 
                                <img class="img-fluid" src="assets/img/Lanana/gambar6edit.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> 
                                	<div class="portfolio-caption-heading"><?php echo $a['nama']; ?></div> 
                                	<input  type="hidden" name="harga6" value="<?php echo $a['harga']; ?>">
                                </div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                                <input class="tulisan" value="0"  type="number" name="jumlah6" placeholder="jumlah" min="0">
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="text-center">
                 	<button class="btn btn-primary btn-xl text-uppercase " id="sendMessageButton" type="submit">Order</button>
 					</form>
                </div>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team1/farisedit.png" alt="" />
                            <h4>Faris</h4>
                            <p class="text-muted">Web Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/fatkurfaris/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/fatkur.rizal.5/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=6285388187787"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team1/donaedit.png" alt="" />
                            <h4>Dona</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/donatrisukma/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/donatrisukmaastikoputri"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=6281649125496"><i class="fab fa-whatsapp"></i></a><hr>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team1/hilmanedit.png" alt="" />
                            <h4>Hilman</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/bukitpria/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://api.whatsapp.com/send?phone=628122645221"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="section-heading text-uppercase">Lanana Contact</h4>
                    <a href="https://api.whatsapp.com/send?phone=6281649125496&text=Nama+%3A%0AAlamat+%3A%0APesanan" title=""><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Whatsaap</button></a>
                </div>
            </div>
        </section>
       
        <!-- Portfolio Modals-->
        <!-- Modal 1-->

        <?php  
         $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='1' ");
         while ($a=mysqli_fetch_array($query)) { ?> 
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase"><?php echo $a['nama']; ?></h2>
                                    <p class="item-intro text-muted">Rp.<?php echo $a['harga']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Lanana/gambar1edit.png>" />
                                    <p>deskrpisi</p>
                                    <ul class="list-inline">
                                        <li><?php echo $a['deskripsi']; ?></li> <br>
                                        <li><?php echo $a['bahan']; ?></li>
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
         $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='2' ");
         while ($a=mysqli_fetch_array($query)) { ?> 
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase"><?php echo $a['nama']; ?></h2>
                                    <p class="item-intro text-muted">Rp.<?php echo $a['harga']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Lanana/gambar2edit.png" />
                                    <p>deskrpisi</p>
                                    <ul class="list-inline">
                                        <li><?php echo $a['deskripsi']; ?></li> <br>
                                        <li><?php echo $a['bahan']; ?></li>
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
         $query = mysqli_query($konek,"SELECT * FROM menu WHERE id_menu='3'");
         while ($a=mysqli_fetch_array($query)) { 
                ?> 
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <h2 class="text-uppercase"><?php echo $a['nama']; ?></h2>
                                    <p class="item-intro text-muted">Rp.<?php echo $a['harga']; ?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Lanana/gambar3edit.png" />
                                    <p>deskrpisi</p>
                                    <ul class="list-inline">
                                        <li><?php echo $a['deskripsi']; ?></li> <br>
                                        <li><?php echo $a['bahan']; ?></li>
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
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Lanana/gambar4edit.png" />
                                    <p>deskrpisi</p>
                                    <ul class="list-inline">
                                        <li><?php echo $a['deskripsi']; ?></li> <br>
                                        <li><?php echo $a['bahan']; ?></li>
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
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Lanana/gambar5edit.png" />
                                    <p>deskrpisi</p>
                                    <ul class="list-inline">
                                        <li><?php echo $a['deskripsi']; ?></li> <br>
                                        <li><?php echo $a['bahan']; ?></li>
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
                                    <img class="img-fluid d-block mx-auto" src="assets/img/Lanana/gambar6edit.png" />
                                    <p>deskrpisi</p>
                                    <ul class="list-inline">
                                        <li><?php echo $a['deskripsi']; ?></li> <br>
                                        <li><?php echo $a['bahan']; ?></li>
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
