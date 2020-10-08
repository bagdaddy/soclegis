<?php get_header('page'); ?>

<?php
$args = array(
    'numberposts' => -1,
    'post_type' => 'article',
    'order' => 'ASC',

);
?>

<div class="main-container news">
    <section class="space--sm unpad--bottom header-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2><?php the_title();?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space--sm unpad--bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="masonry">
                        <div class="masonry__container row">
                            <div class="masonry__item col-lg-4 col-md-6"></div>
                            <?php
                            $the_query = new WP_Query($args);
                            while($the_query->have_posts()):
                            $the_query->the_post();
                            ?>
                            <div class="masonry__item col-lg-4 col-md-6" data-masonry-filter="Marketing">
                                <?php
                                $img = get_field('nuotrauka');
                                $url = get_field('nuoroda');
                                $date = get_field('data');
                                $desc = get_field('aprasymas');
                                $datetime = DateTime::createFromFormat('d/m/Y', $date);
                                ?>
                                <article class="feature feature-1">
                                    <a class="no-styling" target="_blank" href="<?php echo $url; ?>">
                                        <div class="block">
                                            <img alt="Image" src="<?php echo $img;?>" />
                                        </div>
                                        <div class="feature__body boxed boxed--border">

                                            <span><?php echo $datetime->format('y.m.d');?></span>
                                            <h5><?php echo get_the_title()?></h5>
                                            <div class="description"><?php echo $desc;?></div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <?php endwhile ;?>

                            <!--end item-->
                    </div>
                    <!--end masonry-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
<?php get_footer(); ?>
