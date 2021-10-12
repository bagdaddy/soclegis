<?php get_header('page'); ?>

<?php
$args = array(
    'numberposts' => -1,
    'post_type' => 'article',
    'order' => 'DESC',

);
?>

<div class="main-container news">
    <?php
    $the_query = new WP_Query($args);
    while($the_query->have_posts()):
    $the_query->the_post();
    $img = get_field('nuotrauka');
    $url = get_field('nuoroda') ? get_field('nuoroda') : get_permalink(get_the_ID());
    $date = get_field('data');
    $desc = get_field('aprasymas');
    $datetime = DateTime::createFromFormat('d/m/Y', $date);
                            ?>
    <section class="space--xxs blog-article-wide">
        <div class="container">
            <div class="row cta cta--horizontal text-center-xs">
                <?php if($img): ?>
                <div class="col-md-3" >
                    <img style="border-radius: 6px;" src="<?= $img; ?>"/>
                </div>
                <?php endif; ?>
                <div class="col-md-<?php echo $img ? "9" : "12"; ?>">
                    <div class="content">
                        <a href="<?= $url; ?>">
                            <h3><?= get_the_title(); ?></h3>
                        </a>
                        <p class="lead">
                            <?= get_the_excerpt(); ?>
                        </p>
                        <a href="<?= $url; ?>">Skaityti daugiau &raquo;</a>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <?php endwhile; ?>
<?php get_footer(); ?>