<?php
/**
 * Created by PhpStorm.
 * User: yamna
 * Date: 02/03/2019
 * Time: 16:50
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<nav class="section section-header" id="header">
    <div class="parallax">

        <div class="container">
            <div class="content">

                <div class="title-area">
                    <h1 class="title-modern"><?php bloginfo( 'name' ); ?></h1>

                    <?php $description = get_bloginfo( 'description', 'display' ); ?>
                    <?php if($description) { ?><p class="lead blog-description"><?= $description ?></p><?php } ?>
                </div>
                <div class="row searchFilter">
                    <form class="input-group" action="recherche" method="POST">
                        <?php wp_nonce_field();?>
                        <input id="search" type="text" class="form-control" name="search" placeholder="Rechercher par compétence">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Filtres</span> <span class="caret" >&nbsp;</span></button>
                            <div class="dropdown-menu dropdown-menu-right" >
                                <ul class="category_filters" >
                                    <li >
                                        <input type="radio" name="php" id="php" value="php" ><label class="category-label" for="php" >PHP</label>
                                    </li>
                                    <li >
                                        <input type="radio" name="permis" id="permis" value="permis" ><label class="category-label" for="permis" >Permis</label>
                                    </li>
                                </ul>
                            </div>
                            <input id="searchBtn" type="submit" name="bijour" class="btn btn-secondary btn-search" value="Rechercher">
                        </div>
                    </form>
                </div>
            </div>
            <svg viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon fill="white"  points="0,0 30,100 65,21 90,100 100,75 100,100 0,100"/>
                <polygon fill="white" points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
            </svg>
        </div>
    </div>

    </div>

</nav>