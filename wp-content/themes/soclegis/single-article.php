<?php get_header('page'); ?>
<div class="main-container">
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <article>
                        <div class="article__title text-center">
                            <h1 class="h2"><?= the_title() ?></h1>
                            <span><?= get_the_date(); ?></span>
                        </div>
                        <!--end article title-->
                        <div class="article__body">
                            <?php $img = get_field('nuotrauka'); ?>
                            <img alt="Image" src="<?= $img; ?>" />
                            <?php the_content();?>
                        </div>
                        <?php if(get_field('share-facebook')):?>
                        <div class="article__share text-center">
                            <a class="btn bg--facebook btn--icon btn-social" href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>">
                                        <span class="btn__text">
                                            <i class="socicon socicon-facebook"></i>
                                            Dalintis Facebook
                                        </span>
                            </a>
                        </div>
                        <?php endif; ?>
                    </article>
                    <!--end item-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
</div>
<?php get_footer(); ?>