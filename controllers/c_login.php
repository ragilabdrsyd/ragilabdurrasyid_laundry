<?php
session_start();
// error_reporting(E_ALL ^ E_NOTICE);ss

    $conn = mysqli_connect("localhost", "root", "", "laundry");

    //function daftar
//     if(isset($_POST['register'])) {

//      $id = $_POST['id'];
//      $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
//      $username = $_POST['username'];
//      $password = $_POST['password'];
//      $id_outlet = $_POST['id_outlet'];
//      $role = $_POST['role'];

//      $pass = password_hash($password, PASSWORD_DEFAULT);

//      $query = "INSERT INTO tb_user values ('$id', '$nama', '$username', '$pass', '', '$role')";

//      $insert = mysqli_query($conn, $query);

//      if($insert){
//          echo '<script>';
//          echo 'alert("Registrasi Berhasil");';
//         //  echo 'document.location.href="index.php"';
//          echo '</script>';
//      } else {
//          echo '<script language="javascript">';
//          echo 'alert("Register Gagal asupkeun Data nu bener cuk");';
//         //  echo 'window.location = "index.php";';
//          echo '</script>';
//      }
// }

if(isset($_POST['login'])) {

     $username = $_POST['username'];
     $password = $_POST['password'];
     $sql = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
     $data = mysqli_fetch_object($sql);
    //  $cek = mysqli_num_rows($sql);

     if ($data) {
        // $data = $sql->fetch_assoc();
        if (password_verify($password, $data->password)) {
            // echo '<script>alert("Benars")</script>';
            $_SESSION['id'] = $data->id; 
            $_SESSION['nama'] = $data->nama; 
            $_SESSION['outlet'] = $data->id_outlet;
            $_SESSION['role'] = $data->role;

            if($_SESSION['role'] == 'kasir') {
                echo '<script>document.location.href="views/pengguna/home.php";</script>';  
            } else if ($_SESSION['role'] == 'admin') {
                echo '<script>document.location.href="views/pengguna/home.php";</script>';
            } else if ($_SESSION['role'] == 'owner') {
                echo '<script>document.location.href="views/pengguna/home.php";</script>';
            }
         } else {
            header("location:login.php?aksi=error"); 
         }
        }else {
            header("location:login.php?aksi=error"); 
         }

}

// if (isset($_POST['search'])) {
//     $username = $_POST['username'];

//     $query = "SELECT * FROM siswa WHERE username='$username'";
//     $data = mysqli_query($conn, $query);
//         while($d = mysqli_fetch_object($data)){
//             $hasil[] = $d;
//         }
//         return $hasil

        
// }
?>