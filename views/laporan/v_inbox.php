<?php 
    include_once '../template/header.php';
    include_once '../template/sidebar.php';
    include_once '../template/topbar.php';
    include_once '../../controllers/c_box.php';

    $box = new c_box();
    ?>
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="content-page wide-md m-auto">
                                    <div class="nk-block">
                                        <div class="card">
                                            <div class="card-inner">
                                                <!-- <h4 class="title text-soft mb-4 overline-title">Basis Style - Simple Email Template</h4> -->
                                                <table class="email-wraper">
                                                    <tbody><tr>
                                                        <td class="py-5">
                                                            <table class="email-header">
                                                                    <tr>
                                                                        <td class="text-center pb-4" style=" margin-left:0px;width:1000px;">
                                                                            <a href="#"><img class="email-logo" src="../../assets/images/seven.png" alt="logo"></a>
                                                                            <!-- <p class="email-title">Conceptual Base Modern Dashboard Theme</p> -->
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="email-body">
                                                            <?php foreach ($box->edit($_GET['id']) as $data) { ?>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="p-3 p-sm-5">
                                                                            <h4><b>Untuk Kasir / Administrator</b>,</h4>
                                                                            <p></p>
                                                                            <h6><b>Entris Pesanan Laundry atas:</b></h6>
                                                                            <p>Nama: <?php echo $data->nama ?> <br> Telpon: <?php echo $data->tlp ?> <br> Jenis Kelamin: <?php echo $data->jenis_kelamin ?> <br> Alamat: <?php echo $data->alamat ?></p>
                                                                            <h6><b>Jenis Paket:</b> <?php echo $data->jenis_paket ?></h6>
                                                                            <p></p>
                                                                            <h6><b>Catatan:</b></h6><br> <p><?php echo $data->pesan ?></p>
                                                                            <a onclick="return confirm('Apakah yakin data akan di hapus?')"  href="../../routers/r_inbox.php?id=<?php echo $data->id ?>&aksi=hapus"><button style="" type="submit" class="btn btn-primary">Hapus</button></a>
                                                                           
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                
                                                                <?php } ?>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div><!-- .content-page -->
                            </div>
                        </div>
                    </div>
                </div>
    <script src="../../assets/js/bundle.js?ver=3.1.2"></script>
    <script src="../../assets/js/scripts.js?ver=3.1.2"></script>
    <script src="../../assets/js/apps/chats.js?ver=3.1.2"></script>
</body>

</html>