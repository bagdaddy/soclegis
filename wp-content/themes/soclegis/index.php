<?php get_header();?>

<div id="container">
    <div id="content">
        <h1 class="title"><?php the_title(); ?></h1>
        <?php
        while(have_posts()) : the_post();
        ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>