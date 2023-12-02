<?php 
// Memeriksa apakah pengguna sudah login, jika tidak, arahkan kembali ke halaman login
if(!isset($_SESSION["username"])){
    header("location: index.php?page=login");
    exit;
}
?>

<!-- FUNGSI -->
<?php
	include ('../koneksi.php');
	if (isset($_POST['simpan'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$id_kategori = $_POST['id_kategori'];
		$deskripsi = $_POST['deskripsi'];
		
		$rand = rand();
		$ekstensi =  array('png','jpg','jpeg','gif');
		$filename1 = $_FILES['gambar1']['name'];
		$ukuran1 = $_FILES['gambar1']['size'];
		$filename2 = $_FILES['gambar2']['name'];
		$ukuran2 = $_FILES['gambar2']['size'];
		$filename3 = $_FILES['gambar3']['name'];
		$ukuran3 = $_FILES['gambar3']['size'];
		$ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
		$ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
		$ext3 = pathinfo($filename3, PATHINFO_EXTENSION);
		if (isset($_POST['id'])) {
			if(!in_array($ext1 and $ext2 and $ext3,$ekstensi) ) {
				header("location:index.php?page=list&alert=gagal_ekstensi");
			}else{
				if($ukuran1 < 10440700 and $ukuran2 < 10440700 and $ukuran3 < 10440700 ){		
					$x1 = $rand.'_'.$filename1;
					$x2 = $rand.'_'.$filename2;
					$x3 = $rand.'_'.$filename3;
					move_uploaded_file($_FILES['gambar1']['tmp_name'], '../images/'.$rand.'_'.$filename1);
					move_uploaded_file($_FILES['gambar2']['tmp_name'], '../images/'.$rand.'_'.$filename2);
					move_uploaded_file($_FILES['gambar3']['tmp_name'], '../images/'.$rand.'_'.$filename3);
					$ubah = mysqli_query($mysqli, "UPDATE list SET 
											nama = '" . $_POST['nama'] . "',
											alamat = '" . $_POST['alamat'] . "',
											id_kategori = '" . $_POST['id_kategori'] . "',
											deskripsi = '" . $_POST['deskripsi'] . "',
											gambar1 ='$x1',
											gambar2 ='$x2',
											gambar3 ='$x3'
											WHERE
											id = '" . $_POST['id'] . "'");
					header("location:index.php?page=list&alert=berhasil");
				}else{
					header("location:index.php?page=list&alert=gagal_ukuran");
				}
			}
		} else {
			if(!in_array($ext1 and $ext2 and $ext3,$ekstensi) ) {
				header("location:index.php?page=list&alert=gagal_ekstensi");
			}else{
				if($ukuran1 < 10440700 and $ukuran2 < 10440700 and $ukuran3 < 10440700 ){		
					$x1 = $rand.'_'.$filename1;
					$x2 = $rand.'_'.$filename2;
					$x3 = $rand.'_'.$filename3;
					move_uploaded_file($_FILES['gambar1']['tmp_name'], '../images/'.$rand.'_'.$filename1);
					move_uploaded_file($_FILES['gambar2']['tmp_name'], '../images/'.$rand.'_'.$filename2);
					move_uploaded_file($_FILES['gambar3']['tmp_name'], '../images/'.$rand.'_'.$filename3);
					$tambah = mysqli_query($mysqli, "INSERT INTO list (nama,alamat,id_kategori,deskripsi,gambar1,gambar2,gambar3) VALUES('$nama','$alamat','$id_kategori','$deskripsi','$x1','$x2','$x3')");
					header("location:index.php?page=list&alert=berhasil");
				}else{
					header("location:index.php?page=list&alert=gagal_ukuran");
				}
			}
		}
		echo "<script> 
				document.location='index.php?page=list';
				</script>";
	}
	if (isset($_GET['aksi'])) {
		if ($_GET['aksi'] == 'hapus') {
			$ambil = mysqli_query($mysqli, "SELECT * FROM list WHERE id='" . $_GET['id'] . "'");
			while ($row = mysqli_fetch_array($ambil)) {
				$gambar1 = $row['gambar1'];
				$gambar2 = $row['gambar2'];
				$gambar3 = $row['gambar3'];
			}
			$status1 = unlink('../images/'.$gambar1);
			$status2 = unlink('../images/'.$gambar2);
			$status3 = unlink('../images/'.$gambar3);
			if ($status1 and $status2 and $status3){
				$hapus = mysqli_query($mysqli, "DELETE FROM list WHERE id = '" . $_GET['id'] . "'");
				echo "<script> 
				alert ('Data Berhasil Dihapus');
				document.location='index.php?page=list';
				</script>";
			}else {
				echo "<script> 
				alert ('Data Berhasil Dihapus');
				document.location='index.php?page=list';
				</script>";
			}
		}
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
        <div id="content-wrapper" class="d-flex flex-column bottom-slide">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                include '../dashboard/components/topbar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

				<!-- FORM -->
				<form class="form" method="POST" action="" name="myForm" enctype="multipart/form-data" onsubmit="return(validate());">
					<!-- Kode php untuk menghubungkan form dengan database -->
					<?php
					include ('../koneksi.php');
					$nama = '';
					$alamat = '';
					$id_kategori = '';
					$deskripsi = '';
					$gambar1 = '';
					$gambar2 = '';
					$gambar3 = '';
					if (isset($_GET['id'])) {
						$ambil = mysqli_query($mysqli, 
						"SELECT * FROM list 
						WHERE id='" . $_GET['id'] . "'");
						while ($row = mysqli_fetch_array($ambil)) {
							$nama = $row['nama'];
							$alamat = $row['alamat'];
							$id_kategori = $row['id_kategori'];
							$deskripsi = $row['deskripsi'];
							$gambar1 = $row['gambar1'];
							$gambar2 = $row['gambar2'];
							$gambar3 = $row['gambar3'];
						}
					?>
						<input type="hidden" name="id" value="<?php echo
						$_GET['id'] ?>">
					<?php
					}
					?>

					<label class="fw-bold">Kategori</label>
					<select class="form-control" name="id_kategori">
						<?php
						include ('koneksi.php');
						$selected = '';
						$kategori = mysqli_query($mysqli, "SELECT * FROM kategori");
						while ($data = mysqli_fetch_array($kategori)) {
							if ($data['id'] == $id_kategori) {
								$selected = 'selected="selected"';
							} else {
								$selected = '';
							}
						?>
							<option value="<?php echo $data['id'] ?>"  <?php echo $selected?>> <?php echo $data['nama'] ?></option>
						<?php
						}
						?>
					</select>
					<input type="text" class="form-control my-2" placeholder="Nama Wisata" name="nama" value="<?php echo $nama ?>">
					<input type="text" class="form-control my-2" placeholder="Alamat" name="alamat" value="<?php echo $alamat ?>">
					<input type="text" class="form-control my-2" placeholder="Deskripsi" name="deskripsi" value="<?php echo $deskripsi ?>">
					<label class="fw-bold my-2">Gambar 1</label>
					<input type="file" class="form-control" name="gambar1" value="<?php echo $gambar1 ?>">
					<label class="fw-bold my-2">Gambar 2</label>
					<input type="file" class="form-control" name="gambar2" value="<?php echo $gambar2 ?>">
					<label class="fw-bold my-2">Gambar 3</label>
					<input type="file" class="form-control" name="gambar3" value="<?php echo $gambar3 ?>">
					<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
					<button type="submit" class="btn btn-success rounded-pill px-3" name="simpan">Simpan</button>
				</form>

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
