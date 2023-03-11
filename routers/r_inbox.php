<?php
include '../controllers/c_box.php';
$data = new c_box();

if (isset($_POST['tambah'])) {
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenispak = $_POST['jenispak'];
$jeniskel = $_POST['jeniskel'];
$tlp = $_POST['tlp'];
// $subjek = $_POST['subjek'];
$pesan = $_POST['catatan'];

if ($_GET['aksi'] == 'tambah') {
    $data->insert_data($id, $nama, $alamat, $jenispak, $jeniskel, $tlp, $pesan);
}} else {
if ($_GET['aksi'] == 'hapus') {
    $id = $_GET['id'];
    $data->hapus($id);
}}
?>