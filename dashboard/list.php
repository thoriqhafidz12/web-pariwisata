<?php 

// Memeriksa apakah pengguna sudah login, jika tidak, arahkan kembali ke halaman login
if(!isset($_SESSION["username"])){
    header("location: index.php?page=login");
    exit;
}
?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php 
    include '../dashboard/components/sidebar.php';
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column navbar-left">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php 
            include '../dashboard/components/topbar.php';
            ?>
            <!-- End of Topbar -->

            <?php 
            if(isset($_GET['alert'])){
                if($_GET['alert']=='gagal_ekstensi'){
                    ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                        Ekstensi Tidak Diperbolehkan
                    </div>								
                    <?php
                }elseif($_GET['alert']=="gagal_ukuran"){
                    ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                        Ukuran File terlalu Besar
                    </div> 								
                    <?php
                }elseif($_GET['alert']=="berhasil"){
                    ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success</h4>
                        Berhasil Disimpan
                    </div> 								
                    <?php
                }
            }
            ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <a class="btn btn-info" href="index.php?page=edit" >
                    <i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>Tambah Data
                </a>
                
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">LIST WISATA SEMARANG</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar1</th>
                                        <th>Gambar2</th>
                                        <th>Gambar3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- RESULT -->
                                    <?php
                                    include '../koneksi.php';
                                    $result = mysqli_query($mysqli,"SELECT l.*,k.nama as 'kategori' FROM list l LEFT JOIN kategori k ON (l.id_kategori=k.id) ORDER BY id DESC");
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++ ?></th>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['alamat'] ?></td>
                                            <td><?php echo $data['kategori'] ?></td>
                                            <td><?php echo $data['deskripsi'] ?></td>
                                            <td><img src="../images/<?php echo $data['gambar1'] ?>" class="img-thumbnail" alt="..."></td>
                                            <td><img src="../images/<?php echo $data['gambar2'] ?>" class="img-thumbnail" alt="..."></td>
                                            <td><img src="../images/<?php echo $data['gambar3'] ?>" class="img-thumbnail" alt="..."></td>
                                            <td>
                                                <a class="btn btn-success rounded-pill px-3" 
                                                href="index.php?page=edit&id=<?php echo $data['id'] ?>">Ubah
                                                </a>
                                                <a class="btn btn-danger rounded-pill px-3" 
                                                href="index.php?page=edit&id=<?php echo $data['id'] ?>&aksi=hapus">Hapus
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php 
        include '../dashboard/components/footer.php';
        ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php 
include '../dashboard/components/modal.php';
?>



</body>