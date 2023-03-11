<?php

class c_box{
    public function koneksi(){
        $conn = mysqli_connect("localhost", "root", "", "laundry");

        return $conn;

    }
    

    public function tampil_data(){
        $conn = $this->koneksi();

        $query = "SELECT * FROM tb_box";

        $data = mysqli_query($conn, $query);
            while($d = mysqli_fetch_object($data)){
                $hasil[] = $d;
            }
            return $hasil;
            
    }

    public function insert_data($id, $nama, $alamat, $jenispak, $jeniskel, $tlp, $pesan){

        $conn = $this->koneksi();

        $query = "INSERT INTO tb_box VALUES ('$id', '$nama', '$alamat', '$jeniskel', '$tlp', '$jenispak', '$pesan')";
        
        $insert = mysqli_query($conn, $query);

        if ($insert){
            echo "Data berhasil ditambahkan";
        }else{
            echo "Data gagal ditambahkan";
            }
        
    }

    public function edit($id) {
        $conn = $this->koneksi();
        $query = "SELECT * FROM tb_box WHERE id = $id";
        
        $sql = mysqli_query($conn,$query);

        while ($data = mysqli_fetch_object($sql)) {
            $hasil[] = $data;
        }
        return $hasil;
    }

    public function hapus($id) {
        $conn = $this->koneksi();
        $query = "DELETE FROM tb_box WHERE id = $id";
        mysqli_query($conn,$query);
        echo '<script>';
        echo 'alert("Data Berhasil dihapus");';
        echo 'document.location.href="../views/pengguna/home.php"';
        echo '</script>';
    }

    // public function invoice() {
     
    //  $conn = $this->koneksi();
        
    // $query = mysqli_query($conn, "SELECT max(id) as bebep FROM tb_box");
    // $data = mysqli_fetch_array($query);
    // $kodeinvoicee = $data['bebep'];
     
    // // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
    // // dan diubah ke integer dengan (int)
    // $urutan = (int) substr($kodeinvoicee, 3, 3);
     
    // // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
    // $urutan++;
     
    // // membentuk kode barang baru
    // // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
    // // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
    // // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
    // $huruf = "";
    // $kodeinvoicee = $huruf . sprintf("%03s", $urutan);
    // echo $kodeinvoicee;
    // }
}