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
        <title>Data</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styl.css" rel="stylesheet" />
        <link rel="stylesheet" href="new.css">
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="session.php">Home</a></li>
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="php/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <section class="page-section bg-secondary" id="portfolio">
             <div class="container">
                 <div class="atas ">
                     <table border="3" align="center">
                         <h2>Daftar Pengguna</h2>
                          <hr>
                          <tr >
                          <td class="tulisan"> ID USER </td>
                          <td class="tulisan"> Username </td>
                          <td class="tulisan"> Email </td>
                          <td class="tulisan"> Hp </td>
                          <td class="tulisan"> Alamat </td>
                          <td class="tulisan"> Password </td>
                          <td class="tulisan"> Level </td>
                          </tr>
                        <?php 
                            $query = mysqli_query($konek,"SELECT * FROM login ");
                         while ($a=mysqli_fetch_array($query)) { ?>
                             <tr>
                               <td class="tulisan" ><?php echo $a['id'] ?></td>
                               <td class="tulisan"><?php echo $a['username'] ?></td> 
                               <td class="tulisan"><?php echo $a['email'] ?></td> 
                               <td class="tulisan"><?php echo $a['HP'] ?></td>  
                               <td class="tulisan"><?php echo $a['alamat'] ?></td> 
                               <td class="tulisan"><?php echo $a['password'] ?></td> 
                               <td class="tulisan"><?php echo $a['level'] ?></td>   
                               <br>
                             </tr>
                         <?php }?>
                    </table>
                </div>
            </div>
        </section>
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
