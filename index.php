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
                                    <label for="job" class="mb-1" style="color: var(--bs-light);">Job actuel</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="job" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="about" class="mb-1" style="color: var(--bs-light);">A propos de vous <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <textarea type="textarea" name="about" value="" class="form-control" style="height: calc(10.6em + 1.5rem + 2px);" placeholder="Présentez-vous en quelques mots, parlez du type d'emploi que vous recherchez..." id="" required aria-label=""></textarea>
                                    </div>
                                    <label for="phone" class="mb-1" style="color: var(--bs-light);">Téléphone</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="phone" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="address" class="mb-1" style="color: var(--bs-light);">Adresse</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="address" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="email" class="mb-1" style="color: var(--bs-light);">Email</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="email" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="website" class="mb-1" style="color: var(--bs-light);">Site internet</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="website" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="facebook" class="mb-1" style="color: var(--bs-light);">Facebook</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="facebook" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="instagram" class="mb-1" style="color: var(--bs-light);">Instagram</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="instagram" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="pinterest" class="mb-1" style="color: var(--bs-light);">Pinterest</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="pinterest" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="linkedin" class="mb-1" style="color: var(--bs-light);">Linkedin</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="linkedin" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="codepen" class="mb-1" style="color: var(--bs-light);">Codepen</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="codepen" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="behance" class="mb-1" style="color: var(--bs-light);">Behance</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="behance" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="hobby1" class="mb-1" style="color: var(--bs-light);">Centre d'intérêt 1 <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="hobby1" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="hobby2" class="mb-1" style="color: var(--bs-light);">Centre d'intérêt 2</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="hobby2" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="hobby3" class="mb-1" style="color: var(--bs-light);">Centre d'intérêt 3</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="hobby3" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="hobby4" class="mb-1" style="color: var(--bs-light);">Centre d'intérêt 4</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="hobby4" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="hobby5" class="mb-1" style="color: var(--bs-light);">Centre d'intérêt 5</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="hobby5" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="logi1" class="mb-1" style="color: var(--bs-light);">Compétence en logiciel 1 <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="logi1" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="percent_logi1" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition logiciel 1 <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_logi1" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="logi2" class="mb-1" style="color: var(--bs-light);">Compétence en logiciel 2 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="logi2" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_logi2" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition logiciel 2 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_logi2" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="logi3" class="mb-1" style="color: var(--bs-light);">Compétence en logiciel 3 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="logi3" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_logi2" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition logiciel 3 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_logi3" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="logi4" class="mb-1" style="color: var(--bs-light);">Compétence en logiciel 4 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="logi4" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_logi2" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition logiciel 4 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_logi4" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <label for="surname" class="mb-1" style="color: var(--bs-light);">Nom <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="surname" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="photo" class="mb-1" style="color: var(--bs-light);">Photo <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="file" accept="image/*" onChange="img_pathUrl(this);" name="photo" value="" class="form-control" placeholder="" id="" required aria-label="">
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
                                    <label for="experience1" class="mb-1" style="color: var(--bs-light);">Expérience professionnel 1 <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience1" value="" class="form-control" placeholder="Poste occupé" id="" required aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience_name1" value="" class="form-control" placeholder="Nom de l'entreprise" id="" required aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience_date1" value="" class="form-control" placeholder="Date de l'expérience" id="" required aria-label="">
                                    </div>
                                    <label for="experience2" class="mb-1" style="color: var(--bs-light);">Expérience professionnel 2 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience2" value="" class="form-control" placeholder="Poste occupé" id="" aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience_name2" value="" class="form-control" placeholder="Nom de l'entreprise" id="" aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience_date2" value="" class="form-control" placeholder="Date de l'expérience" id="" aria-label="">
                                    </div>
                                    <label for="experience3" class="mb-1" style="color: var(--bs-light);">Expérience professionnel 3 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience3" value="" class="form-control" placeholder="Poste occupé" id="" aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience_name3" value="" class="form-control" placeholder="Nom de l'entreprise" id="" aria-label="">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" name="experience_date3" value="" class="form-control" placeholder="Date de l'expérience" id="" aria-label="">
                                    </div>
                                    <label for="dev1" class="mb-1" style="color: var(--bs-light);">Compétence en dev 1 <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="dev1" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="percent_dev1" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition compétence 1 <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_dev1" value="" class="form-control" placeholder="" id="" required aria-label="">
                                    </div>
                                    <label for="dev2" class="mb-1" style="color: var(--bs-light);">Compétence en dev 2 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="dev2" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_dev2" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition compétence 2 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_dev2" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="dev3" class="mb-1" style="color: var(--bs-light);">Compétence en dev 3 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="dev3" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_dev3" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition compétence 3 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_dev3" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="dev4" class="mb-1" style="color: var(--bs-light);">Compétence en dev 4 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="dev4" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_dev4" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition compétence 4 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_dev4" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="dev5" class="mb-1" style="color: var(--bs-light);">Compétence en dev 5 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="dev5" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_dev5" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition compétence 5 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_dev5" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="dev6" class="mb-1" style="color: var(--bs-light);">Compétence en dev 6 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="dev6" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_dev6" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition compétence 6 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_dev6" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="dev7" class="mb-1" style="color: var(--bs-light);">Compétence en dev 7 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="dev7" value="" class="form-control" placeholder="" id="" aria-label="">
                                    </div>
                                    <label for="percent_dev7" class="mb-1" style="color: var(--bs-light);">Pourcentage d'acquisition compétence 7 <span class="text-danger"></span></label>
                                    <div class="input-group mb-3">
                                        <input type="number" max="100" name="percent_dev7" value="" class="form-control" placeholder="" id="" aria-label="">
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