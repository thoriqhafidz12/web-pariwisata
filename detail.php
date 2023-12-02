<?php 
    include 'koneksi.php';
    if (isset($_GET['id'])) {
        $ambil = mysqli_query($mysqli, "SELECT l.*,k.nama as 'kategori' FROM list l LEFT JOIN kategori k ON (l.id_kategori=k.id) WHERE l.id='" . $_GET['id'] . "'");
        while ($row = mysqli_fetch_array($ambil)) {
            $nama = $row['nama'];
            $alamat = $row['alamat'];
            $deskripsi = $row['deskripsi'];
            $kategori = $row['kategori'];
            $gambar1 = $row['gambar1'];
            $gambar2 = $row['gambar2'];
            $gambar3 = $row['gambar3'];
        }
    }
?>

<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-8 ">
            <div class="text-center">
                <div class="row justify-content-center py-3">
                    <div class="col text-center">
                        <div id="carouselExampleCaptions"class="carousel slide text-center">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/<?= $gambar1 ?>" class="d-block w-100" alt="..." style="height:35rem; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/<?= $gambar2 ?>"  class="d-block w-100" alt="..." style="height:35rem; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/<?= $gambar3 ?>"  class="d-block w-100" alt="..." style="height:35rem; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">

    <h2><?= $nama; ?></h2>
    <br>
    <h6><?= $deskripsi; ?></h6>

</div>
