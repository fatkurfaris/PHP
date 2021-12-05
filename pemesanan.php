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
        <title>Pemesanan</title>
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="user.php">Home</a></li>
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
                         <h2>Daftar Pemesanan</h2>
                          <hr>
                          <tr >
                            <td class="tulisan"> No</td>
                          <td class="tulisan"> Nama Pemesan </td>
                          <td class="tulisan"> Packet 1 </td>
                          <td class="tulisan"> Packet 2 </td>
                          <td class="tulisan"> Packet 3 </td>
                          <td class="tulisan"> Packet 4 </td>
                          <td class="tulisan"> Packet 5 </td>
                          <td class="tulisan"> Packet 6 </td>
                          <td class="tulisan"> Total  QTY </td>
                          <td class="tulisan"> Total Harga</td>
                          <td class="tulisan"> Invoice</td>
                          <td class="tulisan"> Delete</td>
                          </tr>
                        <?php $i=1;
                            $query = mysqli_query($konek,"SELECT * FROM pemesanan WHERE pemesan='$username' ");
                         while ($a=mysqli_fetch_array($query)) { ?>
                             <tr>
                                <td>
                               <?php do {
                                echo $i; $i++;
                                } while ( $i <= 1); ?>
                                </td>
                               <td class="tulisan" ><?php echo $a['pemesan'] ?></td>
                               <td class="tulisan"><?php echo $a['packet1'] ?></td> 
                               <td class="tulisan"><?php echo $a['packet2'] ?></td> 
                               <td class="tulisan"><?php echo $a['packet3'] ?></td>  
                               <td class="tulisan"><?php echo $a['packet4'] ?></td> 
                               <td class="tulisan"><?php echo $a['packet5'] ?></td> 
                               <td class="tulisan"><?php echo $a['packet6'] ?></td>   
                               <td class="tulisan"><?php echo $a['QTY'] ?></td> 
                               <td class="tulisan"><?php echo $a['Total'] ?></td> 
                                <td class="tulisan">
                                <a href=invoice.php?id_pemesanan=<?php echo $a['id_pemesanan'];?>><input type="button" value="Check" class="bg-dark tulisan1"></a>
                                <td class="tulisan">
                                <a href=php/hapus.php?id_pemesanan=<?php echo $a['id_pemesanan'];?>><input type="button" value="Delete" class="bg-dark tulisan1"></a>
                                 </td>
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
