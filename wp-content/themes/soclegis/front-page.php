<?php get_header();?>

    <div class="main-container">
        <section class="cover height-70 imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
            <ul class="slides">
                <?php $hero = get_field('skaidre');?>
                <?php if($hero['nuotrauka']):?>
                <li class="imagebg" data-overlay="4">
                    <div class="background-image-holder background--top">
                        <img alt="background" src="<?php echo $hero['nuotrauka'];?>" />
                    </div>
                    <div class="container pos-vertical-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="header">
                                    <?php echo $hero['pagrindinis_tekstas'];?>
                                </h2>
                                <p class="subheader"><?php echo $hero['antrinis_tekstas'];?></p>
                            </div>
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of container-->
                </li>
                <?php endif;?>
                <?php $hero_2 = get_field('skaidre_2');?>
                <?php if($hero_2['nuotrauka']):?>
                    <li class="imagebg" data-overlay="4">
                        <div class="background-image-holder background--top">
                            <img alt="background" src="<?php echo $hero_2['nuotrauka'];?>" />
                        </div>
                        <div class="container pos-vertical-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="header">
                                        <?php echo $hero_2['pagrindinis_tekstas'];?>
                                    </h1>
                                    <p class="subheader"><?php echo $hero_2['antrinis_tekstas'];?></p>
                                </div>
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </li>
                <?php endif;?>

            </ul>
        </section>

    <section class="bg--secondary services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="text-center unpad--top">
                        <h2 class="services">Mūsų teikiamos paslaugos</h2>
                    </div>
                    <div class="services services-list">
                        <?php $services = get_field('paslaugos');
                        if($services):
                            echo $services;
                        endif;
                        ?>
                    </div>
                </div>

            </div>
            <!--end of row-->
        </div>
    </section>

    <?php $parallax = get_field('parallax');?>
        <?php if($parallax['image']): ?>
        <section id="block_2" class="text-center imagebg parallax">
            <div class="background-image-holder wrap">
                <img alt="background" src="<?php echo $parallax['image'];?>" style="filter: brightness(0.2) !important"/>
            </div>
            <div class="container parallax-text-container" >
                <div class="row">
                    <div>
                        <div class="switchable__text">
                            <h2><?php echo $parallax['pavadinimas']?></h2>
                            <p class="lead"><?php echo $parallax['tekstas']?></p>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <?php endif; ?>
    <section class="text-center unpad--bottom bg--secondary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <?php $first_block = get_field('blokas_1');?>
                    <h2><?php echo $first_block['pavadinimas']?></h2>
                    <p class="lead"><?php echo $first_block['tekstas']; ?></p>
                </div>
                <div class="tabs-container text-center" data-content-align="left">
                    <div class="tab__content">
                        <section class=" ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="feature">
                                            <?php $second_block = get_field('blokas_2');?>
                                            <h4><?php echo $second_block['pavadinimas']; ?></h4>
                                            <p>
                                                <?php echo $second_block['tekstas'];?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="feature">
                                            <?php $third_block = get_field('blokas_3');?>
                                            <h4><?php echo $third_block['pavadinimas'];?></h4>
                                            <p><?php echo $third_block['tekstas'];?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="feature">
                                            <?php $fourth_block = get_field('blokas_4'); ?>
                                            <h4><?php echo $fourth_block['pavadinimas']?></h4>
                                            <p><?php echo $fourth_block['tekstas']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!--end of row-->
                            </div>
                            <!--end of container-->
                        </section>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
    </section>
<?php
get_footer();