<?php echo $this->extend('_partials/template')?>
<?php echo $this->section('isi')?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Layanan</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 service-section">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-7 mb-7">Layanan Garden Track</h1>
            <p class="fs-5 fw-bold text-primary">Layanan Yang Kami Tawarkan Untuk Anda</p><br>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="<?php echo base_url('tanaman/'); ?>img/service-6.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="<?php echo base_url('tanaman/'); ?>img/icon/icon-7.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Deteksi Tanaman</h4>
                        <p class="mb-4">Unggah Gambar Tanaman, dan sistem akan mengidentifikasi jenis tanamannya </p>
                        <a class="btn btn-sm" href="upload_gambar"><i class="fa fa-plus text-primary me-2"></i>Deteksi Tanaman</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="<?php echo base_url('tanaman/'); ?>img/service-1.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="<?php echo base_url('tanaman/'); ?>img/icon/icon-2.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Cari Tanaman</h4>
                        <p class="mb-4">Lihat Berbagai Jenis Tanaman Disini, Dan cari Informasinya</p>
                        <a class="btn btn-sm" href="plants"><i class="fa fa-plus text-primary me-2"></i>Cari Tanaman</a>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?php echo base_url('tanaman/'); ?>img/service-2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?php echo base_url('tanaman/'); ?>img/icon/icon-4.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Buat Kebun Anda</h4>
                            <p class="mb-4">Buat kebun digital anda disini, dan tambahkan tanaman</p>
                            <a class="btn btn-sm" href="buat_kebun"><i class="fa fa-plus text-primary me-2"></i>Buat Kebun</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="<?php echo base_url('tanaman/'); ?>img/service-3.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="<?php echo base_url('tanaman/'); ?>img/icon/icon-8.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Kelola Kebun Anda</h4>
                            <p class="mb-4">Kelola kebun digital anda disini, lihat perkembangan tanaman anda</p>
                            <a class="btn btn-sm" href="kelola_kebun"><i class="fa fa-plus text-primary me-2"></i>Kelola Kebun</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $this->endSection()?>
