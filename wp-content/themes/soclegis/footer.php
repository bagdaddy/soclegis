<div class="container pre-footer">
    <div class="text-center contact" id="contact">
        <div class="header centered">
            <label>Kontaktai:</label>
        </div>
        <p>
            MB "Soclegis"<br/>
            el.p.: <b>info@soclegis.lt</b><br/>
            Direktorius Vykintas Bagdonas, tel.: <b>868644030</b><br/>
            Į.k. <b>305527283</b><br/>
        </p>
        <ul class="social-list list-inline list--hover">
            <li><a href="https://www.facebook.com/soclegis/" target="_blank">
                    <i class="socicon socicon-facebook icon icon--xs"></i>
                </a>
            </li>
            <li><a href="mailto:<?php echo get_field('el_pastas')?>;">
                    <i class="socicon socicon-mail icon icon--xs"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="clients-container">
        <div class="centered">
            <a class="btn btn--primary-1" href="<?= get_post_type_archive_link('client'); ?>">
                <span class="btn__text"><?= __('Mūsų klientai ir partneriai') ?></span>
            </a>
        </div>
    </div>
</div>

<footer class="text-center-xs space--xs bg--secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-7 footer-menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'menu_class' => 'list-inline',
                    ));
                    ?>
                <p>
                    <span class="type--fine-print">&copy;
                        Socialinių paslaugų kokybės centras</span>
                </p>
            </div>
    </div>
    <!--end of container-->
</footer>
</div>
<a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
    <i class="stack-interface stack-up-open-big"></i>
</a>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>