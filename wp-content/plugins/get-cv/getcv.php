<?php
/**
 * @package get_cv
 * @version 0.1.0
 */
/*
Plugin Name: Get CV
Description: Plugin permettant d'afficher les cv stockées dans une base de donnees externe
Author: Yamna MELKI & Baptiste ANGOT
Version: 0.1.0
*/

// Récupération JSON
function getresponse($request){
    return wp_remote_get($request);
}

function get_cv() {

    if (isset($_POST["search"])){
        if ($_POST['php']){

            $urlrequest = "http://localhost:8888/blankpageCi/api/v1/viewcomp";

        }
        else if (isset($_POST["permis"])){
            $urlrequest = "http://localhost:8888/blankpageCi/api/v1/candidatfilter";
        }

        else {
            $urlrequest = "http://localhost:8888/blankpageCi/api/v1/candidat/viewcom/" . $_POST['search'];

        }
    } else {
        $urlrequest = "http://localhost:8888/blankpageCi/api/v1/candidat";

    }

    $chosen = getresponse($urlrequest);
    $data = json_decode($chosen["body"]);
    $content = (array)$data;

    //affichage

    $page = get_post();



    if (is_page($page)) {

        front_CV($content);

    }

}

function front_CV($content){ ?>


    <?php

    $nbcv = count($content); ?>
    <div class="home-three-style module parallax parallax-1" id="results">
        <h3>Nombre de résultats: <?= $nbcv; ?></h3>
    </div>

    <?php for ($i=0; $i< $nbcv; $i++) { ?>


        <div class="home-three-style module parallax parallax-1" data-type="background" data-speed="10">
            <div class="button-dd">
                <button class="btn site-btn dropdown-btn" type="button" data-toggle="collapse" data-target="#allCV<?= $i; ?>" aria-expanded="false" aria-controls="allCV">
                    <?php if ($content[$i]->nomcandidat) echo $content[$i]->nomcandidat;?>
                </button>
            </div>
            <div class="container-fluid p-0 parallax-container collapse" id="allCV<?= $i; ?>">
                <div class="row m-0">
                    <div class="col-xl-5 col-lg-5 p-0">
                        <div class="main-left-area h-100">
                            <div class="container-fluid">
                            </div>
                            <section class="intro-section">
                                <div class="hero-text">
                                    <h2><?php if ($content[$i]->nomcandidat) echo $content[$i]->nomcandidat;?></h2>
                                    <p><?php if ($content[$i]->bioinfo) echo $content[$i]->bioinfo;?></p>
                                </div>
                                <p class="mb-5"><?php if ($content[$i]->moreinfo) echo $content[$i]->moreinfo;?></p>
                                <div class="hero-info pt-5">
                                    <div class="section-title">
                                        <h2>Coordonnees</h2>
                                    </div>
                                    <ul>
                                        <li><span>Age</span><p><?php if ($content[$i]->ageinfo) echo $content[$i]->ageinfo;?></p></li>
                                        <li><span>Addresse</span><p><?php if ($content[$i]->adresseinfo) echo $content[$i]->adresseinfo;?>,
                                                <?php if ($content[$i]->cpinfo) echo $content[$i]->cpinfo;?>
                                                <?php if ($content[$i]->villeinfo) echo $content[$i]->villeinfo;?></p></li>
                                        <li><span>E-mail</span><p><?php if ($content[$i]->emailcandidat) echo $content[$i]->emailcandidat; ?></p></li>
                                        <li><span>Telephone</span><p><?php if ($content[$i]->portableinfo) echo $content[$i]->portableinfo;?></p></li>
                                        <li><span>Permis</span><p><?php if ($content[$i]->permisinfo) echo $content[$i]->permisinfo;?></p></li>
                                        <li><span>Véhiculé</span><p><?php if ($content[$i]->vehiculeinfo) echo $content[$i]->vehiculeinfo;?></p></li>
                                    </ul>
                                </div>
                            </section>

                            <section class="extra-section spad">
                                <div class="section-title">
                                    <h2>Certifications</h2>
                                </div>
                                <div class="row">
                                    <?php if ($content[$i]->certif){
                                        foreach ($content[$i]->certif as $certif) {?>
                                            <div class="col-md-6">
                                                <h3><?= $certif->namecertif;?></h3>
                                                <h4><?= $certif->datecertif;?></h4>
                                                <p><?= $certif->descriptioncertif;?></p>
                                            </div>
                                        <?php }
                                    } ?>
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </section>
                            <section class="language-section spad hero-info pt-5">
                                <div class="section-title">
                                    <h2>Langues</h2>
                                </div>
                                <ul style="list-style: none;">
                                    <li><?php if ($content[$i]->langues){
                                            foreach ($content[$i]->langues as $lang) { ?>
                                                <span> <?= $lang->namelangue;?></span>
                                                <?= $lang->niveaulangue;?>
                                            <?php }
                                        }?>
                                    </li>
                                </ul>
                            </section>
                            <div class="social-links">
                                <?php  if ($content[$i]->reseau){
                                    foreach ($content[$i]->reseau as $reseaux) {?>
                                        <a href="<?= $reseaux->lienreseau;?>"><i class="fa fa-<?= $reseaux->namereseau;?>"></i></a>
                                    <?php }
                                }?>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-7">
                        <div class="main-right-area">
                            <!-- Resume section start -->
                            <section class="resume-section spad pt-0">
                                <div class="section-title">


                                    <h2>Expériences professionnelles</h2>
                                </div>

                                <ul class="resume-list">
                                    <?php if ($content[$i]->xp){
                                        foreach ($content[$i]->xp as $exp) {?>
                                            <li>
                                                <h2><?= $exp->date_debutxp;?>-<?= $exp->dureexp + $exp->date_debutxp;?></h2>
                                                <h3><?= $exp->entreprisexp;?>, <?= $exp->adressexp;?>, <?= $exp->cpxp;?>, <?= $exp->villexp;?></h3>
                                                <h4><?= $exp->intitulexp;?></h4>
                                                <p><?= $exp->descriptionxp;?></p>
                                            </li>
                                        <?php }
                                    }?>
                                </ul>
                            </section>
                            <!-- Resume section end -->
                            <!-- Resume section start -->
                            <section class="resume-section">
                                <div class="section-title">
                                    <h2>Formation</h2>
                                </div>
                                <ul class="resume-list">
                                    <?php if ($content[$i]->formation){
                                        foreach ($content[$i]->formation as $formation) {?>
                                            <li>
                                                <h2><?= $formation->datedebutformation;?> - <?= $formation->dureeformation + $formation->datedebutformation;?></h2>
                                                <h3><?= $formation->diplomeformation;?></h3>
                                                <h4><?= $formation->ecoleformation; ?>, <?= $formation->adresseformation;?>, <?= $formation->cpformation;?>, <?= $formation->villeformation;?> </h4>
                                                <p><?= $formation->mention_commentairesformation;?></p>
                                            </li>
                                        <?php }
                                    } ?>
                                </ul>
                            </section>
                            <!-- Resume section end -->

                            <!-- skill section start -->
                            <div class="skill-section">
                                <div class="section-title">
                                    <h2>Compétences</h2>
                                </div>
                                <div class="skills">
                                    <?php if ($content[$i]->comp){
                                        foreach ($content[$i]->comp as $skills) {?>
                                            <div class="resume-list">
                                                <p><?= $skills->namecompetence;?></p>
                                            </div>
                                        <?php }
                                    }?>
                                </div>
                                <div class="section-title">
                                    <h2>Centres d'intérêt</h2>
                                </div>
                                <div class="resume-section">
                                    <?php if ($content[$i]->interet){
                                        foreach ($content[$i]->interet as $interet) {?>
                                            <div class="resume-list">
                                                <h4><?= $interet->nameinteret; ?></h4>
                                                <p><?= $interet->descriptioninteret;?></p>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>
                            <!-- Review section start -->
                            <section class="resume-section">
                                <div class="section-title">
                                    <h2>Savoir être</h2>
                                </div>
                                <div class="resume-list owl-carousel">
                                    <div class="resume-list">

                                        <?php if ($content[$i]->savoir){
                                            foreach ($content[$i]->savoir as $savoir) { ?>
                                                <p><?php if ($savoir->namesavoir)  echo $savoir->namesavoir;?></p>
                                            <?php }
                                        }?>

                                    </div>
                            </section>
                            <!-- skill section end -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-cv">
                <script>
                    $(document).ready(function(){
                        var $window = $(window);
                        $('div[data-type="background"]').each(function(){
                            var $bgobj = $(this);

                            $(window).scroll(function() {
                                var yPos = -($window.scrollTop() / $bgobj.data('speed'));

                                var coords = '50% '+ yPos + 'px';

                                $bgobj.css({ backgroundPosition: coords });
                            });
                        });
                    });

                </script>
            </div>
        </div>
        </div>
    <?php }
}?>


<?php if ($content[$i]->portfolioinfo)?>
<?= $content[$i]->portfolioinfo;








add_shortcode('getcv', 'get_cv');



