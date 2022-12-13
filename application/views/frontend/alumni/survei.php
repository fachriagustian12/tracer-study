<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tracer Study IF UNLA</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/frontend')?>/img/logo.png" rel="icon">
    <link href="<?= base_url('assets/frontend/alumni')?>/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/frontend/alumni')?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/alumni')?>/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/alumni')?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/alumni')?>/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/alumni')?>/vendor/owl.carousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="<?= base_url('assets/frontend/alumni')?>/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/frontend/alumni')?>/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet"
        type="text/css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- =======================================================
  * Template Name: iPortfolio - v1.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php 
    if($this->session->flashdata('hasilSurvey')){
  ?>
    <script>
    swal("Bagus !", "<?= $this->session->flashdata('hasilSurvey') ?>", "success", {
        button: "OK",
    });
    </script>
    <?php
    }
  ?>
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="<?= base_url('assets')?>/user/<?= $this->session->userdata('foto')?>" alt=""
                    class="img-fluid rounded-circle">
                <h1 class="text-light"><?= ucfirst($this->session->userdata('nama_depan'))?></h1>
                <h1 class="text-light"><?= ucfirst($this->session->userdata('nama_belakang'))?></h1>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li><a href="<?= base_url('alumni') ?>" id="home"><i class="bx bx-home"></i> <span>Back To
                                Home</span></a></li>
                    <li><a href="<?= base_url('login/logout') ?>"><i class="bx bx-exit"></i> Log out</a></li>
                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <section class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Survey</h2>
                </div>

                <div class="row" data-aos="fade-in" style="font-size:11px;">
                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-tasks-alt"></i>
                                <h4><?= $survey->nama_survei ?></h4>
                                <p><?= $survey->deskripsi ?></p>
                                <?php 
                      if ($cekJawabanUser > 0) {
                    ?>
                                <span class="float-right"><a class="btn btn-secondary btn-sm disabled">Anda Sudah
                                        Mengerjakan Survey ini <span
                                            class="anu bx bx-wink-smile pt-1"></span></a></span>
                                <?php
                      }else if($cekPertanyaan == 0){
                    ?>
                                <span class="float-right"><a class="btn btn-secondary btn-sm disabled">Survey Belum
                                        tersedia</a></span>
                                <?php
                      }else{
                    ?>
                                <span class="float-right"><a
                                        href="<?= base_url('lakukanSurvey/'.$title.'/'.$surveyPertanyaan->id) ?>"
                                        class="btn btn-primary btn-sm">Mulai Kerjakan <span
                                            class="anu bx bx-right-arrow pt-1"></span></a></span>
                                <?php
                      }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Tracer Study 2020</span></strong>
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                    App Created by <a href="https://github.com/fachriagustian12/">Fachri Agustian</a>
                </div>
            </div>
        </footer><!-- End  Footer -->

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/jquery.easing/jquery.easing.min.js"></script>
        <!-- <script src="<?= base_url('assets/frontend/alumni')?>/vendor/php-email-form/validate.js"></script> -->
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/counterup/counterup.min.js"></script>
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/venobox/venobox.min.js"></script>
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/typed.js/typed.min.js"></script>
        <script src="<?= base_url('assets/frontend/alumni')?>/vendor/aos/aos.js"></script>
        <script>
        window.setTimeout(function() {
            $("#alertAlumni").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
        </script>
        <!-- Template Main JS File -->
        <script src="<?= base_url('assets/frontend/alumni')?>/js/main.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"
            type="text/javascript"></script>
        <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        </script>
        <script>
        $(document).ready(function() {
            $("#datepicker").datepicker({
                autoclose: true,
                format: 'dd mm yyyy'
            });
            $("#datepicker1").datepicker({
                autoclose: true,
                format: 'dd mm yyyy'
            });
        });
        </script>

</body>

</html>