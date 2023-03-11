<?php 
    include_once '../template/header.php';
    include_once '../template/sidebar.php';
    include_once '../template/topbar.php';
    include_once '../../controllers/c_pengguna.php';
    include_once '../../controllers/c_outlet.php';

    $perintah = new c_pengguna();
    $perintah2 = new c_outlet();
    ?>

    <div class="row" style="background-color: white;">
        <div class="col">
        </div>
        <div class="col-5" style=" height:648px;">
            <h2 style="margin-top:80px; margin-bottom:30px; text-align: center;">Edit Pengguna</h2>
            <form action="../../routers/r_pengguna.php?aksi=update" method="POST">
            <?php foreach ($perintah->edit($_GET['id']) as $data) { ?>
                <div class="mb-3">
                    <!-- <label for="exampleInputEmail1" class="form-label">ID</label> --> <input type="text"
                        class="form-control" name="id" value="<?php echo $data->id ?>" hidden>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label> <input type="text"
                        class="form-control" name="nama" value="<?php echo $data->nama ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label> <input type="text"
                        class="form-control" name="username" value="<?php echo $data->username ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label> <input type="password"
                        class="form-control" name="password" value="" required>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Outlet</label>
                    <select name="id_outlet" id="jeniskelamin" class="form-select" required>
                    <?php foreach ($perintah2->getoutlet() as $data2) { ?>
                        <?php if ($data->id_outlet == $data2->id) {
                            $select = "selected";
                         } else {
                            $select = "";
                         } 
                         echo "<option $select value='$data2->id'>$data2->nama</option>"
                         ?>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Roles</label>
                <select name="role" id="jeniskelamin" class="form-select" required>
                <?php if ($data->role == "admin") {
                    echo '
                    <option selected value="admin">Administrator</option>
                    <option value="kasir">Kasir</option>
                    <option value="owner">Owner</option>';
                         } elseif ($data->role == "kasir") {
                            echo '
                            <option value="admin">Administrator</option>
                            <option selected value="kasir">Kasir</option>
                            <option value="owner">Owner</option>';
                         } elseif ($data->role == "owner") {
                            echo '
                            <option value="admin">Administrator</option>
                            <option value="kasir">Kasir</option>
                            <option selected value="owner">Owner</option>';
                         } ?>
                    <!-- <option value="">Role</option> -->
                    <!-- <option value="admin">Administrator</option>
                    <option value="kasir">Kasir</option>
                    <option value="owner">Owner</option> -->
                    </select>
                </div>
                <button style="" name="update" type="submit" class="btn btn-primary">Kirim</button>
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