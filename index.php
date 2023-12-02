<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pariwisata Semarang</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome CSS Online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Fontawesome CSS Offline -->
    <link rel="stylesheet" href="fontawesome/all.min.css">

    <!-- <link rel="stylesheet" href="css/loading.css"> -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://sptsmg.files.wordpress.com/2014/02/logo_ayo_wisata_ke_semarang.jpg">
    
    <!-- Manual Styling -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <?php
    include 'components/navbar.php';
    session_start();
    if (isset($_GET['page'])) {
        include($_GET['page'] . ".php");
    } else {?>
      
    
    <div class="jumbotron ">
        <div class="container text-center">
            <h1>SELAMAT DATANG DI WEBSITE<br>PARIWISATA SEMARANG</h1>
        </div>
    </div>

    <!-- About Semarang -->
    <div class="container-fluid text-center" style="padding: 50px 0;">
      <div class="container text-center">
        <div class="row align-items-center">
          <div class="col-md-6 text-center mb-3">
            <img src="https://images.unsplash.com/photo-1634991599324-cb0ee4942962?q=80&w=2075&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="..." style="max-width: 20rem;">
          </div>
          <div class="col-md-6 text-center">
            <h5 style="color: black;">Tentang <span><strong style="color: #grey;">Semarang</strong></span> </h5>
            <hr class="custom-hr" style="border-color: grey; border-width: 2px; margin-top: 0; margin-bottom: 20px;">
            <p class="content-text">
            Kota Semarang adalah ibu kota provinsi Jawa Tengah, Indonesia. Di Semarang sendiri memiliki berbagai macam tempat wisata mulai dari <strong>Alam, Sejarah, Religi dan Kuliner</strong>. 
            </p>
          </div>
        </div>
      </div>
    </div>

    <?php 
    include 'koneksi.php';
    ?>
    <section id="wisata" class="pb-4">
      <div class="container-fluid text-center bg-dark-subtle" style="padding: 70px 0;color: white;">
        <h5>Apa Saja Wisata di Semarang?</h5>
        <h2>Berikut Selengkapnya!</h2>
      </div>
      <div class="container">
        <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2>Wisata</h2>
          </div>
        </div>

        <div class="tab-content">
        <!-- Wisata -> Wisata Alam -->
          <div class="tab-pane fade show active" id="nav-wisata1" role="tabpanel" aria-labelledby="wisata1">
          <!-- baris 1 -->
          
          <div class="row mt-3 justify-content-center">
            <?php 
            $data = mysqli_query ($mysqli, "SELECT l.*,k.nama as 'kategori' FROM list l LEFT JOIN kategori k ON (l.id_kategori=k.id) ORDER BY nama DESC ");
            while ($d = mysqli_fetch_array ($data)){
            ?>
            
            <div class="card mx-2 my-2 bg-transparent" style="width: 18rem;">
              <img src="images/<?= $d['gambar1']?>" class="card-img-top" alt="..." style="max-height:15rem; object-fit: cover; height:15rem">
              <div class="card-body">
                <h5 class="card-title"><?= $d['nama'] ?></h5>
                <p class="card-text"><?= $d['kategori']; ?></p>
                <a href="index.php?page=detail&id=<?= $d['id']  ?>" class="btn btn-secondary">Selengkapnya</a>
              </div>
            </div>
            <?php 
            }
            ?>
          </div>
        </div> 
      </div>
    </section>

    <section id="galeri" class="pb-4 bg-dark-subtle">
	    <div class="container mb-2">
	        <div class="row pt-4 mb-4">
	            <div class="col text-center">
	                <h2>Kategori</h2>
	            </div>
	        </div>
          <div class="container text-center my-2">
            <div class="row align-items-center">
              <div class="col">
                <div class="card text-bg-dark">
                  <img src="https://images.unsplash.com/photo-1549973890-38d08b229439?q=80&w=1944&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img" alt="..." style ="height:18rem; object-fit:cover; max-height: 10rem; opacity:0.7" >
                  <div class="card-img-overlay">
                    <h2>Alam</h2>
                    <a href="index.php?page=kategori&id_kategori=1" class="btn btn-light">Lihat</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-bg-dark">
                  <img src="https://images.unsplash.com/photo-1614157196885-b9ddd59e3f23?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img" alt="..." style ="height:18rem; object-fit:cover; max-height: 10rem; opacity:0.7" >
                  <div class="card-img-overlay">
                    <h2>Religi</h2>
                    <a href="index.php?page=kategori&id_kategori=2" class="btn btn-light">Lihat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
	    </div>
      <div class="container text-center my-2">
      <div class="container text-center my-2">
            <div class="row align-items-center">
              <div class="col">
                <div class="card text-bg-dark">
                  <img src="https://images.unsplash.com/photo-1651890059696-247893997e83?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img" alt="..." style ="height:18rem; object-fit:cover; max-height: 10rem; opacity:0.7" >
                  <div class="card-img-overlay">
                    <h2>Sejarah</h2>
                    <a href="index.php?page=kategori&id_kategori=3" class="btn btn-light">Lihat</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-bg-dark">
                  <img src="https://images.unsplash.com/photo-1577791463300-c2203c56f322?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img" alt="..." style ="height:18rem; object-fit:cover; max-height: 10rem; opacity:0.7" >
                  <div class="card-img-overlay">
                    <h2>Kuliner</h2>
                    <a href="index.php?page=kategori&id_kategori=4" class="btn btn-light">Lihat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
	    </div>
    </section>
    <?php } ?>

    
    <!-- Copyright -->
    <?php 
      include 'components/footer.php'
    ?>
  </div>
    <!-- <a href="#" class="backToTop"></a> -->
    <a id="backtotop" href="#top"><img src="images/angle-up.svg" alt=""></a>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/loading.js"></script>
    <!-- Fontawesome JS Online-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Fontawesome JS Offline -->
    <script src="fontawesome/all.min.js"></script>
    <!-- My Script -->
    <script src="js/main.js"></script>

  </body>
</html>