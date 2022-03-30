<?php include('head.php'); ?>

<!--main content wrapper start-->
<div class="main-wrapper overflow-hidden">

    <!--header start-->
    <header class="main-header w-100">
        <nav class="navbar navbar-expand-xl navbar-light sticky-header">
            <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                <a href="index.php" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                    <h1 class="">Curriculum Viflex</h1>
                </a>

                <a class="navbar-toggler position-absolute right-0 border-0 " href="#offcanvasWithBackdrop" role="button">
                    <span class="far fa-bars"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
                </a>
            </div>
        </nav>
    </header>
    <!--header end-->

    <!--hero section start-->
    <section class="hero-section ptb-120 min-vh-100 d-flex align-items-center bg-dark text-white position-relative overflow-hidden"
            style="background: url('img/page-header-bg.svg')no-repeat bottom right">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content-wrap">
                        <h5 class="text-warning">Élu meilleur générateur de CV en ligne !</h5>
                        <h1 class="fw-bold display-5">Créez un CV professionnel et personnalisable en quelques clics</h1>
                        <p class="lead">Une fois crée, téléchargez votre CV gratuitement</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 mt-5 mt-lg-0">
                    <div class="animated-img-wrap">
                        <!--animated shape start-->
                        <ul class="animate-element parallax-element animated-hero-1">
                            <li class="layer" data-depth="0.02">
                                <img src="img/screen/animated-screen-2.svg" alt="shape"
                                     class="img-fluid position-absolute type-0">
                            </li>
                        </ul>
                        <!--animated shape end-->
                        <img src="img/screen/animated-screen-1.svg" alt="shape" class="position-relative img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--promo section start-->
    <section class="promo-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center">
                        <h2>Enregistrement de vos informations</h2>
                        <p>Remplissez les champs ci-dessous pour pouvoir générer ensuite votre CV</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 col-md-8 col-12">
                    <div class="register-wrap p-5 bg-dark shadow rounded-custom">
                        <h1 class="h3" style="color: var(--bs-light);">Mes informations</h1>
                        <form action="cv.php" method="get" class="mt-4 register-form">
                            <div class="row">

                                <div class="col-sm-6">
                                    <label for="name" class="mb-1" style="color: var(--bs-light);">Prénom <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="name" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="job" class="mb-1" style="color: var(--bs-light);">Job actuel <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="job" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label for="surname" class="mb-1" style="color: var(--bs-light);">Nom <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="surname" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="photo" class="mb-1" style="color: var(--bs-light);">Photo <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="file" name="photo" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="formation1" class="mb-1" style="color: var(--bs-light);">Formation 1<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation1" value="" class="form-control" placeholder="Intitulé de la formation" id="" required aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation_name1" value="" class="form-control" placeholder="Nom de la formation / Nom de l'école" id="" required aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation_date1" value="" class="form-control" placeholder="Date de la formation" id="" required aria-label="">
                                    </div>
                                    <label for="formation2" class="mb-1" style="color: var(--bs-light);">Formation 2 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation2" value="" class="form-control" placeholder="Intitulé de la formation" id="" aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation_name2" value="" class="form-control" placeholder="Nom de la formation / Nom de l'école" id="" aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation_date2" value="" class="form-control" placeholder="Date de la formation" id="" aria-label="">
                                    </div>
                                    <label for="formation3" class="mb-1" style="color: var(--bs-light);">Formation 3 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation3" value="" class="form-control" placeholder="Intitulé de la formation" id="" aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation_name3" value="" class="form-control" placeholder="Nom de la formation / Nom de l'école" id="" aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="formation_date3" value="" class="form-control" placeholder="Date de la formation" id="" aria-label="">
                                    </div>
                                    <!-- <div class="new_input">
                                        
                                    </div>
                                    <div class="add_input">ajouter un input</div> -->
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mt-2-rem d-block w-100" style="width: fit-content !important">Générez votre CV</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--footer section start-->
    <footer class="footer-section">
        <!--footer top start-->
        <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
        <div class="footer-top bg-dark text-white pt-5" style="background: url('img/page-header-bg.svg')no-repeat bottom right">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                        <div class="footer-single-col">
                            <div class="footer-single-col mb-4">
                                <h1 class="">Curriculum Viflex</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--footer top end-->

        <!--footer bottom start-->
        <div class="footer-bottom bg-dark text-white py-4">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-7 col-lg-7">
                        <div class="copyright-text">
                            <p class="mb-lg-0 mb-md-0">&copy; 2022 Curriculum Viflex Tout droits réservés.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="footer-single-col text-start text-lg-end text-md-end">
                            <ul class="list-unstyled list-inline footer-social-list mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom end-->
    </footer>
    <!--footer section end-->

</div>
<!--main content wrapper end-->

<?php include('foot.php'); ?>