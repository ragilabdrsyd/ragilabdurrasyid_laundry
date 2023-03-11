<?php 
    include_once '../template/header.php';
    include_once '../template/sidebar.php';
    include_once '../template/topbar.php';
    include_once '../../controllers/c_produk.php';
    include_once '../../controllers/c_outlet.php';


    $perintah = new c_produk();
    $perintah2 = new c_outlet();
    ?>

    <div class="row" style="background-color: white;">
        <div class="col">
        </div>
        <div class="col-5" style=" height:648px;">
            <h2 style="margin-top:80px; margin-bottom:30px; text-align: center;">Edit Produk</h2>
            <form action="../../routers/r_produk.php?aksi=update" method="POST">
            <?php foreach ($perintah->edit($_GET['id']) as $data) { ?>
                <div class="mb-3">
                    <!-- <label for="exampleInputEmail1" class="form-label">ID</label> --> <input type="text"
                        class="form-control" name="id" value="<?php echo $data->id ?>" hidden>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Paket</label> <input type="text"
                        class="form-control" name="namaket" value="<?php echo $data->nama_paket ?>" required>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Paket</label>
                <select name="jenispak" id="" class="form-select" required>
                        <?php 
                        if ($data->jenis == "kilon") {
                            echo '<option selected value="kilon">Kiloan</option>
                            <option value="selimut">Selimut</option>
                            <option value="bed_cover">Sepray</option>
                            <option value="kaos">Kaos</option>
                            <option value="lain">Other</option>
                            ';
                         } elseif ($data->jenis == "selimut") {
                            echo '<option value="kilon">Kiloan</option>
                            <option selected value="selimut">Selimut</option>
                            <option value="bed_cover">Sepray</option>
                            <option value="kaos">Kaos</option>
                            <option value="lain">Other</option>
                            ';
                         } elseif ($data->jenis == "bed_cover") {
                            echo '<option value="kilon">Kiloan</option>
                            <option value="selimut">Selimut</option>
                            <option selected value="bed_cover">Sepray</option>
                            <option value="kaos">Kaos</option>
                            <option value="lain">Other</option>
                            ';
                        } elseif ($data->jenis == "kaos") {
                            echo '<option value="kilon">Kiloan</option>
                            <option value="selimut">Selimut</option>
                            <option value="bed_cover">Sepray</option>
                            <option selected value="kaos">Kaos</option>
                            <option value="lain">Other</option>
                            ';
                        } elseif ($data->jenis == "lain") {
                            echo '<option value="kilon">Kiloan</option>
                            <option value="selimut">Selimut</option>
                            <option value="bed_cover">Sepray</option>
                            <option value="kaos">Kaos</option>
                            <option selected value="lain">Other</option>
                            ';
                        }
                        ?>
                    <!-- <option value="">Pilihan</option> -->
                    <!-- <option value="kilon">Kilon</option>
                    <option value="selimut">Selimut</option>
                    <option value="bed_cover">Sepray</option>
                    <option value="kaos">Kaos</option>
                    <option value="lain">Other</option>
                    </select> -->
                </div>
                <div class="mb-3">
                <input type="text" class="form-control" name="id_outlet" value="<?php echo $_SESSION['outlet']?>" hidden>
                <!-- <label for="exampleInputEmail1" class="form-label">Outlet</label>
                    <select name="id_outlet" id="" class="form-select">
                    <option>Outlet</option>
                    <php foreach ($perintah2->getoutlet() as $data2) { ?>
                        <php if ($data->id_outlet == $data2->id) {
                            $select = "selected";
                         } else {
                            $select = "";
                         } 
                         echo "<option $select value='$data2->id'>$data2->nama</option>"
                         ?>
                        <php } ?>
                    </select> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga</label> <input type="number"
                        class="form-control" name="harga" value="<?php echo $data->harga ?>" required>
                </div>
                <button style="" type="submit" name="update" class="btn btn-primary">Kirim</button>
                <?php } ?>
            </form>
        </div>
        <div class="col" style="background-color: white;">
        </div>
    </div>
</body>
<!-- <script src="../../assets/js/bootstrap.bundle.min.js"
    integrity="sha384-u10knCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTP00mMi466C8"
    crossorigin="anonymous"></script> -->
    <?php 
    if ($_GET['aksi'] == 'error') {
        echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Data Gagal diubah',
            confirmButtonText: 'Coba lagi!'
          })
        </script>
        ";
    }
    ?>
    <script src="../../assets/js/mainn.js"></script>
    <script src="../../assets/js/bundle.js?ver=3.1.2"></script>
    <script src="../../assets/js/scripts.js?ver=3.1.2"></script>
</body>
<!-- <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
</html>