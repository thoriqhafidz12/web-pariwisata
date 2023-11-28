<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Website Pariwisata</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome CSS Online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Fontawesome CSS Offline -->
    <link rel="stylesheet" href="fontawesome/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Manual Styling -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body id="top">
    
    <?php 
    include 'components/navbar.php'
    ?>
    
	<div class="jumbotron">
        <div class="container text-center">
            <h1>SELAMAT DATANG DI WEBSITE<br>PARIWISATA SEMARANG</h1>
            <a href="" class="btn btn-sm btn-info">Selengkapnya..</a>
        </div>
    </div>

    <!-- Wisata -->
    <?php 
    include 'components/wisata.php'
    ?>
    <!-- Wisata Akhir -->


    <!-- Galeri Awal -->
	<?php 
    include 'components/galeri.php'
    ?>
    <!-- Galeri Akhir -->

    <!-- Lokasi Awal -->
    <!-- <section id="lokasi" class="pb-4">
    	<div class="container">
    		<div class="row pt-4 mb-4">
	            <div class="col text-center">
	                <h2>Lokasi</h2>
	            </div>
	        </div>
	        <div class="row text-center">
	            <div class="col-md-6">
		            <h5>Tana Toraja</h5>
		            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509970.400534145!2d119.42692775610675!3d-3.0561797180325785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9395b1758f3585%3A0x3030bfbcaf77090!2sTana%20Toraja%20Regency%2C%20South%20Sulawesi!5e0!3m2!1sen!2sid!4v1607242666318!5m2!1sen!2sid" width="540" height="405" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	            </div>
	            <div class="col-md-6">
	            	<h5>Toraja Utara</h5>
		            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510043.4637895478!2d119.60014118846279!3d-2.898360996825392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d93c15594bf5fe7%3A0x3bd5d554371f59fa!2sNorth%20Toraja%20Regency%2C%20South%20Sulawesi!5e0!3m2!1sen!2sid!4v1607242774353!5m2!1sen!2sid" width="540" height="405" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	            </div>
	        </div>
    	</div>
    </section> -->
    <!-- Lokasi Akhir -->

    <!-- Kontak Awal -->
    <!-- <section id="kontak" class="text-white pb-4">
    	<div class="container">
    		<div class="row pt-4 mb-4">
	            <div class="col text-center">
	                <h2>Kontak</h2>
	            </div>
	        </div>
	        <div class="row">    
	            <div id="sosmed" class="col-md-3 mb-4">
	            	<h3>Media Sosial</h3>
	            	<div class="row mb-2">
	            		<div class="col">
	            			<a href=""><i class="fab fa-fw fa-facebook fa-2x mr-2"></i></a>
			            	<a href=""><i class="fab fa-fw fa-instagram fa-2x mr-2"></i></a>
			            	<a href=""><i class="fab fa-fw fa-twitter fa-2x mr-2"></i></a>
			            	<a href=""><i class="fab fa-fw fa-youtube fa-2x mr-2"></i></a>
	            		</div>
	            	</div>
	            	<div class="row">
	            		<div class="col">
	            			<a href=""><i class="fab fa-fw fa-whatsapp fa-2x mr-2"></i></a>
			            	<a href=""><i class="fab fa-fw fa-line fa-2x mr-2"></i></a>
			            	<a href=""><i class="fab fa-fw fa-telegram fa-2x mr-2"></i></a>
			            	<a href=""><i class="fas fa-fw fa-envelope fa-2x mr-2"></i></a>
	            		</div>
	            	</div>   	
	            </div>
	            <div id="tentang" class="col-md-3 mb-3">
	            	<h3>Tentang</h3>
	            	<p><a href="#wisata"><i class="fas fa-fw fa-map-marked-alt"></i> Wisata</a></p>
	            	<p><a href="#galeri"><i class="fas fa-fw fa-images"></i> Galeri</a></p>
	            	<p><a href="#lokasi"><i class="fas fa-fw fa-map-marker-alt"></i> Lokasi</a></p>
	            </div>	 
	            <div class="col-md-6">
	                <h3>Hubungi Kami</h3>
	            	<form action="" class="mt-2">
	                    <div class="form-group">
	                        <input id="nama" class="form-control" type="text" placeholder="Nama">
	                    </div>
	                    <div class="form-group">
	                        <input id="email" class="form-control" type="text" placeholder="Email">
	                    </div>
	                    <div class="form-group">
	                        <input id="subjek" class="form-control" type="text" placeholder="Subjek">
	                    </div>
	                    <div class="form-group">
	                        <textarea name="pesan" id="pesan" rows="5" class="form-control" placeholder="Masukkan Pesan"></textarea>
	                    </div>
	                    <div class="form-group">
	                        <button type="button" class="btn btn-primary">Kirim</button>
	                    </div>
	                </form>
	            </div>
	        </div>
    	</div>
    </section> -->
    <!-- Kontak Akhir -->

    <!-- Copyright -->
    <?php 
    include 'components/footer.php'
    ?>

    <!-- <a href="#" class="backToTop"></a> -->
    <a id="backtotop" href="#top"><img src="images/angle-up.svg" alt=""></a>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Fontawesome JS Online-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Fontawesome JS Offline -->
    <script src="fontawesome/all.min.js"></script>
    <!-- My Script -->
    <script src="js/main.js"></script>

  </body>
</html>