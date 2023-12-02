<style>
    .img-table{
        height:10rem; 
        width:10rem; 
        max-height:10rem;
        max-width:10rem;
        object-fit: cover;
    }
</style>
<div class="container">
    <table class="table table-responsive my-2" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Deskripsi</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            if (isset($_GET['id_kategori'])) {
            $no = 1;
            $ambil = mysqli_query($mysqli, "SELECT l.*,k.nama as 'kategori' FROM list l LEFT JOIN kategori k ON (l.id_kategori=k.id) WHERE l.id_kategori='" . $_GET['id_kategori'] . "'");
            while ($data = mysqli_fetch_array($ambil)) {
            ?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><img src="images/<?php echo $data['gambar1'] ?>" class="img-table img-thumbnail" alt="..."></td>
                <td><img src="images/<?php echo $data['gambar2'] ?>" class="img-table img-thumbnail" alt="..."></td>
                <td><img src="images/<?php echo $data['gambar3'] ?>" class="img-table img-thumbnail" alt="..."></td>
                <td>
                    <a class="btn btn-success rounded-pill px-3" href="index.php?page=detail&id=<?= $data['id'] ?>">Lihat</a>
                </td>
            </tr>
            <?php
            }
            }
            ?>
        </tbody>
    </table>

</div>