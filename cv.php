<?php

$data['name'] = $_GET['name'];
$data['surname'] = $_GET['surname'];
$data['job'] = $_GET['job'];
$data['about'] = $_GET['about'];
$data['photo'] = $_GET['photo'];
$data['address'] = $_GET['address'];
$data['phone'] = $_GET['phone'];
$data['email'] = $_GET['email'];
$data['website'] = $_GET['website'];
$data['facebook'] = $_GET['facebook'];
$data['instagram'] = $_GET['instagram'];
$data['pinterest'] = $_GET['pinterest'];
$data['linkedin'] = $_GET['linkedin'];
$data['codepen'] = $_GET['codepen'];
$data['behance'] = $_GET['behance'];
$data['formation1'] = $_GET['formation1'];
$data['formation_name1'] = $_GET['formation_name1'];
$data['formation_date1'] = $_GET['formation_date1'];
$data['formation2'] = $_GET['formation2'];
$data['formation_name2'] = $_GET['formation_name2'];
$data['formation_date2'] = $_GET['formation_date2'];
$data['formation3'] = $_GET['formation3'];
$data['formation_name3'] = $_GET['formation_name3'];
$data['formation_date3'] = $_GET['formation_date3'];
$data['experience1'] = $_GET['experience1'];
$data['experience_name1'] = $_GET['experience_name1'];
$data['experience_date1'] = $_GET['experience_date1'];
$data['experience2'] = $_GET['experience2'];
$data['experience_name2'] = $_GET['experience_name2'];
$data['experience_date2'] = $_GET['experience_date2'];
$data['experience3'] = $_GET['experience3'];
$data['experience_name3'] = $_GET['experience_name3'];
$data['experience_date3'] = $_GET['experience_date3'];
$data['hobby1'] = $_GET['hobby1'];
$data['hobby2'] = $_GET['hobby2'];
$data['hobby3'] = $_GET['hobby3'];
$data['hobby4'] = $_GET['hobby4'];
$data['hobby5'] = $_GET['hobby5'];
$data['dev1'] = $_GET['dev1'];
$data['dev2'] = $_GET['dev2'];
$data['dev3'] = $_GET['dev3'];
$data['dev4'] = $_GET['dev4'];
$data['dev5'] = $_GET['dev5'];
$data['dev6'] = $_GET['dev6'];
$data['dev7'] = $_GET['dev7'];
$data['percent_dev1'] = $_GET['percent_dev1'];
$data['percent_dev2'] = $_GET['percent_dev2'];
$data['percent_dev3'] = $_GET['percent_dev3'];
$data['percent_dev4'] = $_GET['percent_dev4'];
$data['percent_dev5'] = $_GET['percent_dev5'];
$data['percent_dev6'] = $_GET['percent_dev6'];
$data['percent_dev7'] = $_GET['percent_dev7'];
$data['logi1'] = $_GET['logi1'];
$data['logi2'] = $_GET['logi2'];
$data['logi3'] = $_GET['logi3'];
$data['logi4'] = $_GET['logi4'];
$data['percent_logi1'] = $_GET['percent_logi1'];
$data['percent_logi2'] = $_GET['percent_logi2'];
$data['percent_logi3'] = $_GET['percent_logi3'];
$data['percent_logi4'] = $_GET['percent_logi4'];


?>

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

        <div class="resume">
            <div class="base">
            <div class="profile">
                <div class="photo">
                    <img src="<?php echo $data['photo'];?>" id="img_url" />
                    </div>
                    <div class="info">
                    <h1 class="name"><?php echo $data['name']." ".$data['surname'];?></h1>
                    <h2 class="job"><?php echo $data['job'];?></h2>
                </div>
            </div>
            <div class="about">
                <h3>A propos de moi</h3>
                <?php echo $data['about'];?>
            </div>
            <div class="contact">
                <h3>Contactez-moi</h3>
                <div class="call"><a href="tel:<?php echo $data['phone'];?>"><i class="fas fa-phone"></i><span><?php echo $data['phone'];?></span></a></div>
                <div class="address"><a><i class="fas fa-map-marker"></i><span><?php echo $data['address'];?></span></a>
                </div>
                <div class="email"><a href="mailto:<?php echo $data['email'];?>"><i class="fas fa-envelope"></i><span><?php echo $data['email'];?></span></a></div>
                <div class="website"><a href="<?php echo $data['website'];?>" target="_blank"> <i class="fas fa-home"></i><span><?php echo $data['website'];?></span></a></div>
            </div>
            <div class="follow">
                <h3>Suivez-moi</h3>
                <div class="box">
                <?php if(!empty($data['facebook'])): ?>
                    <a href="<?php echo $data['facebook'];?>" target="_blank"><i class="fab fa-facebook"></i></a>
                <?php else: ?>
                    <a href="" style="display:none"></a>
                <?php endif; ?>
                <?php if(!empty($data['instagram'])): ?>
                    <a href="<?php echo $data['instagram'];?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <?php else: ?>
                    <a href="" style="display:none"></a>
                <?php endif; ?>
                <?php if(!empty($data['pinterest'])): ?>
                    <a href="<?php echo $data['pinterest'];?>" target="_blank"><i class="fab fa-pinterest"></i></a>
                <?php else: ?>
                    <a href="" style="display:none"></a>
                <?php endif; ?>
                <?php if(!empty($data['linkedin'])): ?>
                    <a href="<?php echo $data['linkedin'];?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <?php else: ?>
                    <a href="" style="display:none"></a>
                <?php endif; ?>
                <?php if(!empty($data['codepen'])): ?>
                    <a href="<?php echo $data['codepen'];?>" target="_blank"><i class="fab fa-codepen"></i></a>
                <?php else: ?>
                    <a href="" style="display:none"></a>
                <?php endif; ?>
                <?php if(!empty($data['behance'])): ?>
                    <a href="<?php echo $data['behance'];?>" target="_blank"><i class="fab fa-behance"></i></a>
                <?php else: ?>
                    <a href="" style="display:none"></a>
                <?php endif; ?>
                </div>
            </div>
            </div>
            <div class="func">
            <div class="work">
                <h3><i class="fa fa-briefcase"></i>Experience</h3>
                <ul>
                <li><span><?php echo $data['experience1'] ?></span><small><?php echo $data['experience_name1'] ?></small><small><?php echo $data['experience_date1'] ?></small></li>
                <li><span><?php echo $data['experience2'] ?></span><small><?php echo $data['experience_name2'] ?></small><small><?php echo $data['experience_date2'] ?></small></li>
                <li><span><?php echo $data['experience3'] ?></span><small><?php echo $data['experience_name3'] ?></small><small><?php echo $data['experience_date3'] ?></small></li>
                </ul>
            </div>
            <div class="edu">
                <h3><i class="fa fa-graduation-cap"></i>Formation</h3>
                <ul>
                <li><span><?php echo $data['formation1'] ?></span><small><?php echo $data['formation_name1'] ?></small><small><?php echo $data['formation_date1'] ?></small></li>
                <li><span><?php echo $data['formation2'] ?></span><small><?php echo $data['formation_name2'] ?></small><small><?php echo $data['formation_date2'] ?></small></li>
                <li><span><?php echo $data['formation3'] ?></span><small><?php echo $data['formation_name3'] ?></small><small><?php echo $data['formation_date3'] ?></small></li>
                </ul>
            </div>
            <div class="skills-prog">
                <h3><i class="fas fa-code"></i>Compétence en dev</h3>
                <ul>
                <li data-percent="<?php echo $data['percent_dev1'];?>"><span><?php echo $data['dev1'];?></span>
                    <div class="skills-bar">
                    <div class="bar"></div>
                    </div>
                </li>
                <li data-percent="<?php echo $data['percent_dev2'];?>"><span><?php echo $data['dev2'];?></span>
                    <div class="skills-bar">
                    <div class="bar"></div>
                    </div>
                </li>
                <li data-percent="<?php echo $data['percent_dev3'];?>"><span><?php echo $data['dev3'];?></span>
                    <div class="skills-bar">
                    <div class="bar"></div>
                    </div>
                </li>
                <li data-percent="<?php echo $data['percent_dev4'];?>"><span><?php echo $data['dev4'];?></span>
                    <div class="skills-bar">
                    <div class="bar"></div>
                    </div>
                </li>
                <li data-percent="<?php echo $data['percent_dev5'];?>"><span><?php echo $data['dev5'];?></span>
                    <div class="skills-bar">
                    <div class="bar"></div>
                    </div>
                </li>
                <li data-percent="<?php echo $data['percent_dev6'];?>"><span><?php echo $data['dev6'];?></span>
                    <div class="skills-bar">
                    <div class="bar"></div>
                    </div>
                </li>
                <li data-percent="<?php echo $data['percent_dev7'];?>"><span><?php echo $data['dev7'];?></span>
                    <div class="skills-bar">
                    <div class="bar"></div>
                    </div>
                </li>
                </ul>
            </div>
            <div class="skills-soft">
                <h3><i class="fas fa-bezier-curve"></i>Compétence en logiciel</h3>
                <ul>
                <li data-percent="<?php echo $data['percent_logi1'];?>">
                    <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45"></circle>
                    </svg><span><?php echo $data['logi1'];?></span><small></small>
                </li>
                <li data-percent="<?php echo $data['percent_logi2'];?>">
                    <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45"></circle>
                    </svg><span><?php echo $data['logi2'];?></span><small></small>
                </li>
                <li data-percent="<?php echo $data['percent_logi3'];?>">
                    <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45"></circle>
                    </svg><span><?php echo $data['logi3'];?></span><small></small>
                </li>
                <li data-percent="<?php echo $data['percent_logi4'];?>">
                    <svg viewbox="0 0 100 100">
                    <circle cx="50" cy="50" r="45"></circle>
                    <circle class="cbar" cx="50" cy="50" r="45"></circle>
                    </svg><span><?php echo $data['logi4'];?></span><small></small>
                </li>
                </ul>
            </div>
            <div class="interests">
                <h3><i class="fas fa-star"></i>Centre d'intérêt</h3>
                <div class="interests-items">
                <div class="art"><i class="fas fa-palette"></i><span><?php echo $data['hobby1'];?></span></div>
                <div class="art"><i class="fas fa-book"></i><span><?php echo $data['hobby2'];?></span></div>
                <div class="movies"><i class="fas fa-film"></i><span><?php echo $data['hobby3'];?></span></div>
                <div class="music"><i class="fas fa-headphones"></i><span><?php echo $data['hobby4'];?></span></div>
                <div class="games"><i class="fas fa-gamepad"></i><span><?php echo $data['hobby5'];?></span></div>
                </div>
            </div>
            </div>
        </div>

    </div>

    <?php include('foot.php'); ?>