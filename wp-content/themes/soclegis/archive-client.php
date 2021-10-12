<?php get_header('page'); ?>

<div class="main-container">
    <section class="text-center space--sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 text-content">
                    <h2><?= __('Klientai', 'soclegis'); ?></h2>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="block--members unpad--top">
        <div class="container">
            <div class="row justify-content-around">
                <?php
                while(have_posts()):
                    the_post();
                    $title = get_the_title();
                    $link = get_field('link');
                    $image = get_field('logotipas');
                    ?>
                    <div class="col-md-4">
                        <div class="member text-center">
                            <div class="boxed boxed--border">
                                <?php if($image['url']): ?>
                                    <div class="member-logo">
                                        <a href="<?= $link; ?>" target="_blank">
                                            <img src="<?= $image['sizes']['logo']; ?>"/>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <a href="<?= $link; ?>"><h5><?= $title; ?></h5></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>