<?php

class c_produk{
    public function koneksi(){
        $conn = mysqli_connect("localhost", "root", "", "laundry");

        return $conn;

    }
    

    public function tampil_data(){
        $conn = $this->koneksi();

        $batas = 5;
        $hai = "haiii";
        $query2 = mysqli_query($conn, "SELECT * FROM tb_paket");
        $jmldata = mysqli_num_rows($query2);
        $jmlhalaman = ceil($jmldata/$batas);
        $page = (isset($_GET['page'])) ? $_GET['page']:1;
        $posisi = ($page - 1) * $batas;

    if (isset($_POST['search'])) {
            $ser = $_POST['cari'];
            $query = "SELECT * FROM tb_paket WHERE jenis = '$ser' or nama_paket = '$ser' or harga = '$ser'";
        } else {
            $query = "SELECT * FROM tb_paket LIMIT $posisi, $batas";
            $_SESSION['halaman'] = $jmlhalaman;
            $_SESSION['batas'] = $batas;
            $_SESSION['posisi'] = $posisi; 
            $_SESSION['page'] = $page;
        }
        $data = mysqli_query($conn, $query);
            while($d = mysqli_fetch_object($data)){
                $hasil[] = $d;
            }
            return $hasil;
            $test['yaho'] = $hai;
            
    }

    public function getproduk() {
        $conn = $this->koneksi();
         $outlett = "SELECT * FROM tb_paket";

        $data = mysqli_query($conn, $outlett);
            while($d = mysqli_fetch_object($data)){
                $hasil[] = $d;
            }
            return $hasil;
    }   
    

    public function insert_data($id, $outlet, $jenispak, $namaket, $harga){

        $conn = $this->koneksi();

        // if ($jenispak === "" or empty($namaket) or empty($harga)) {
        //     echo '<script>';
        //     echo 'alert("Data Gagal ditambahkan-");';
        //     echo 'document.location.href="../views/produk/v_tambah_produk.php"';
        //     echo '</script>';
        // } else {

        $query = "INSERT INTO tb_paket VALUES ('$id', '$outlet', '$jenispak', '$namaket', '$harga')";
        
        $insert = mysqli_query($conn, $query);

        if ($insert){
            header("location:../views/produk/v_list_product.php?aksi=sukses");
            // echo '<script>';
            // echo 'alert("Data Berhasil ditambahkan");';
            // echo 'document.location.href="../views/produk/v_list_product.php"';
            // echo '</script>';
        }else{
            header("location:../views/produk/v_tambah_produk.php?aksi=error");
            // echo '<script>';
            // echo 'alert("Data Gagal ditambahkan");';
            // echo 'document.location.href="../views/produk/v_tambah_produk.php"';
            // echo '</script>';
            }
        
    }

    public function hapus($id) {
        $conn = $this->koneksi();
        $query = "DELETE FROM tb_paket WHERE id = $id";
        mysqli_query($conn,$query);
        header("location:../views/produk/v_list_product.php?aksi=hapus");
        // echo '<script>';
        // echo 'alert("Data Berhasil dihapus");';
        // echo 'document.location.href="../views/produk/v_list_product.php"';
        // echo '</script>';
    }

    public function edit($id) {
        $conn = $this->koneksi();
        $query = "SELECT * FROM tb_paket WHERE id = $id";
        
        $sql = mysqli_query($conn,$query);

        while ($data = mysqli_fetch_object($sql)) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function update($id, $outlet, $jenispak, $namaket, $harga) {

        $conn = $this->koneksi();
        // if ($jenispak === "" or empty($namaket) or empty($harga)) {
        //     echo '<script>';
        //     echo 'alert("Data Gagal diubah-");';
        //     echo 'document.location.href="../views/produk/v_edit_produk.php"';
        //     echo '</script>';
        // } else {

        $query = "UPDATE tb_paket SET id_outlet='$outlet', jenis='$jenispak', nama_paket='$namaket', harga='$harga' WHERE id='$id'";
        $update = mysqli_query($conn, $query);

        if ($update) {
            header("location:../views/produk/v_list_product.php?aksi=update");
            // echo '<script>';
            // echo 'alert("Data Berhasil diubah");';
            // echo 'document.location.href="../views/produk/v_list_product.php"';
            // echo '</script>';
        }else{
            header("location:../views/produk/v_edit_produk.php?aksi=error");
        }
    }
}