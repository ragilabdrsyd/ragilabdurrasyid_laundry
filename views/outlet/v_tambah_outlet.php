<?php 
    include_once '../template/header.php';
    include_once '../template/sidebar.php';
    include_once '../template/topbar.php';
    // include_once '../../controllers/c_outlet.php';
    ?>

    <div class="row" style="background-color: white;">
        <div class="col">
        </div>
        <div class="col-5" style=" height:648px;">
            <h2 style="margin-top:80px; margin-bottom:30px; text-align: center;">Registrasi Outlet</h2>
            <form action="../../routers/r_outlet.php?aksi=tambah" method="POST">
                <div class="mb-3">
                    <!-- <label for="exampleInputEmail1" class="form-label">ID</label> --> <input type="text"
                        class="form-control" name="id" hidden>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label> <input type="text"
                        class="form-control" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label> <input type="text"
                        class="form-control" name="alamat" required>
                </div>
                <!-- <div class="mb-3">
                    <select name="jenis_kelamin" id="jeniskelamin" class="form-select">
                        <option>Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div> -->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Telepon</label> <input type="number"
                        class="form-control" name="tlp" required>
                </div>
                <button style="" name="tambah" type="submit" class="btn btn-primary">Kirim</button>
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
            text: 'Data Gagal ditambahkan',
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