<?php 
  session_start();
  include "php/koneksi.php";
  $username = $_SESSION['username'];
  if(empty($_SESSION['username'])){
  header("location:/index.php?pesan=belum_login");
  }
    $id_pemesanan=$_GET['id_pemesanan'];
    $a = mysqli_query($konek,"SELECT * FROM pemesanan WHERE id_pemesanan='$id_pemesanan'");
    while ($hasil=mysqli_fetch_array($a) ) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>


      <?php 
      $b = mysqli_query($konek,"SELECT * FROM login WHERE username='$username' ");
      while ($hasil2=mysqli_fetch_array($b)) { ?>


      <h1>Invoice no <?php echo $id_pemesanan ?></h1>
      <div id="company" class="clearfix">
        <div>Lanana.idn</div>
        <div>Jl. Swadaya 235-231, Kutu Dukuh,<br> Sinduadi, Kec. Mlati, Kabupaten Sleman, <br> Daerah Istimewa Yogyakarta 55284<br /> </div>
        <div>0852-9291-7466</div>
        <div><a href="lanana.idn@gmail.com">Lananaidn@gmail.com</a></div>
      </div>
      <div id="project">
        <div>Invoice Pemesanan Makanan</div>
        <div><span>Pemesan</span> <?php echo $hasil['pemesan']; ?></div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com"><?php echo $hasil2['email'] ?></a></div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">No</th>
            <th class="desc">Deskripsi</th>
            <th>Harga</th>
            <th>Qty</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td class="service" align="center">1</td>
          <td class="desc" >Packet1</td>
          <td class="unit" ><?php echo $hasil['harga1']; ?></td>
          <td class="qty" ><?php echo $hasil['packet1']; ?></td>
          <td class="total" >Rp.<?php echo $hasil['packet1']* $hasil['harga1']; ?></td>
        </tr>
        <tr>
          <td class="service" align="center">2</td>
          <td class="desc" >Packet2</td>
          <td class="unit" ><?php echo $hasil['harga2']; ?></td>
          <td class="qty" ><?php echo $hasil['packet2']; ?></td>
          <td class="total" >Rp.<?php echo $hasil['packet2']* $hasil['harga2']; ?></td>
        </tr>
        <tr>
          <td class="service" align="center">3</td>
          <td class="desc" >Packet3</td>
          <td class="unit" ><?php echo $hasil['harga3']; ?></td>
          <td class="qty" ><?php echo $hasil['packet3']; ?></td>
          <td class="total" >Rp.<?php echo $hasil['packet3']* $hasil['harga3']; ?></td>
        </tr>
        <tr>
          <td class="service" align="center">4</td>
          <td class="desc" >Packet4</td>
          <td class="unit" ><?php echo $hasil['harga4']; ?></td>
          <td class="qty" ><?php echo $hasil['packet4']; ?></td>
          <td class="total" >Rp.<?php echo $hasil['packet4']* $hasil['harga4']; ?></td>
        </tr>
        <tr>
          <td class="service" align="center">5</td>
          <td class="desc" >Packet5</td>
          <td class="unit" ><?php echo $hasil['harga5']; ?></td>
          <td class="qty" ><?php echo $hasil['packet5']; ?></td>
          <td class="total" >Rp.<?php echo $hasil['packet5']* $hasil['harga5']; ?></td>
        </tr>
          <tr>
          <td class="service" align="center">6</td>
          <td class="desc" >Packet6</td>
          <td class="unit" ><?php echo $hasil['harga6']; ?></td>
          <td class="qty" ><?php echo $hasil['packet6']; ?></td>
          <td class="total" >Rp.<?php echo $hasil['packet6']* $hasil['harga6']; ?></td>
        </tr>
          </tr>

            <td colspan="4">SUBTOTAL</td>
            <td class="total">Rp.<?php echo $hasil['Total']; ?></td>
          </tr>
          <tr>
            <td colspan="4">TAX 10%</td>
            <td class="total">Rp.<?php echo $hasil['Total']*10/100; ?></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">Rp.<?php echo $hasil['Total']*10/100+$hasil['Total']; ?></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Jangan lupa dibayar dan jangan dibiasakan menghutang.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>

  <?php } }?>