<?php 
    get_header();
    $currentlang = get_bloginfo('language');
?>

<?php if( have_rows('vcard') ): while( have_rows('vcard') ): the_row();  ?>
    <section class="header-vcard" <?php if( get_sub_field('fondo_del_header') ): ?>data-parallax="scroll" data-image-src="<?php the_sub_field('fondo_del_header') ?>"<?php endif; ?>>
        <a id="logo" class="d-none d-lg-block" href="<?php echo esc_url( home_url() ); ?>">
            <img class="logo img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="">
        </a>
        <div class="container">
            <div class="row">
                <div class="col my-auto text-center">
                    <div class="foto">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="body-vcard pb-60">
        <div class="container">
            <div class="row" style="margin-bottom: 60px;">
                <div class="col text-center">
                <?php if( get_sub_field('puesto') ): ?>
                    <p id="puesto" class="text-uppercase">
                        <?php the_sub_field('puesto') ?>
                    </p>
                <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 mb-4 mb-lg-0 text-center">
                    <ul id="contacto" class="list-inline">
                    <?php if( get_sub_field('telefono') ): ?>
                        <li class="list-inline-item">
                            <a id="telefono" href="tel:+52<?php the_sub_field('telefono') ?>" target="_blank">
                                <i class="fa-solid fa-phone"></i>
                            </a>
                            <small class="text-uppercase">
                                <?php esc_html_e( 'Llamar', 'geg' ); ?>
                            </small>
                        </li>
                    <?php endif; ?>
                    <?php if( get_sub_field('telefono') ): ?>
                        <li class="list-inline-item">
                            <a id="whatsapp" href="https://wa.me/52<?php the_sub_field('telefono') ?>?text=Hola%20<?php the_title(); ?>,%20necesito%20información." target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <small class="text-uppercase">
                                <?php esc_html_e( 'WhatsApp', 'geg' ); ?>
                            </small>
                        </li>
                    <?php endif; ?>
                    <?php if( get_sub_field('correo') ): ?>
                        <li class="list-inline-item">
                            <a id="email" href="mailto:<?php the_sub_field('correo') ?>">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                            <small class="text-uppercase">
                                <?php esc_html_e( 'Email', 'geg' ); ?>
                            </small>
                        </li>
                    <?php endif; ?>
                    </ul>
                    
                    <div class="d-none d-lg-block">
                        <ul id="botones-verdes" class="list-unstyled">
                        <?php if( get_sub_field('vfc_link') ): ?>
                            <li class="mb-3">
                                <a href="<?php the_sub_field('vfc_link') ?>" class="btn btn-primary">
                                    <i class="fa-solid fa-user-plus"></i> <?php esc_html_e( 'Añadir a contactos', 'geg' ); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                            <li>
                                <a href="https://www.addtoany.com/share#url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" class="btn btn-primary a2a_dd">
                                    <i class="fa-solid fa-share-nodes"></i> <?php esc_html_e( 'Compartir', 'geg' ); ?>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-none d-lg-block">
                        <ul class="social list-inline">
                        <?php if( get_sub_field('twitter') ): ?>
                            <li class="list-inline-item">
                                <a id="twitter" href="<?php the_sub_field('twitter'); ?>" target="_blank">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('facebook') ): ?>
                            <li class="list-inline-item">
                                <a id="facebook" href="<?php the_sub_field('facebook'); ?>" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('instagram') ): ?>
                            <li class="list-inline-item">
                                <a id="instagram" href="<?php the_sub_field('instagram'); ?>" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('linkedin') ): ?>
                            <li class="list-inline-item">
                                <a id="linkedin" href="<?php the_sub_field('linkedin'); ?>" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('youtube') ): ?>
                            <li class="list-inline-item">
                                <a id="youtube" href="<?php the_sub_field('youtube'); ?>" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('tiktok') ): ?>
                            <li class="list-inline-item">
                                <a id="tiktok" href="<?php the_sub_field('tiktok'); ?>" target="_blank">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('spotify') ): ?>
                            <li class="list-inline-item">
                                <a id="spotify" href="<?php the_sub_field('spotify'); ?>" target="_blank">
                                    <i class="fa-brands fa-spotify"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('google') ): ?>
                            <li class="list-inline-item">
                                <a id="google" href="<?php the_sub_field('google'); ?>" target="_blank">
                                    <i class="fa-brands fa-google"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 mb-4 mb-lg-0 text-center">
                    <div class="d-lg-none">
                        <a href="<?php echo esc_url( home_url() ); ?>">
                            <img class="logo-movil img-fluid mb-5" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/vcards/logo.png" alt="">
                        </a>
                    </div>
                <?php if( get_sub_field('texto_de_la_vcard') ): ?>
                    <?php the_sub_field('texto_de_la_vcard') ?>
                <?php endif; ?>
                    <h1 class="texto-contactanos">
                        <?php esc_html_e( '¡Contáctanos!', 'geg' ); ?>
                    </h1>
                    <div class="d-lg-none">
                    <?php if ( $currentlang == "en-US" ): ?>
                        <a href="<?php echo get_page_link('690') ?>" class="btn btn-primary btn-mas-informacion rounded-pill mt-5 text-uppercase">
                            <h6 class="mb-0">
                                <?php esc_html_e( 'Más información', 'geg' ); ?>
                            </h6>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo get_page_link('20') ?>" class="btn btn-primary btn-mas-informacion rounded-pill mt-5 text-uppercase">
                            <h6 class="mb-0">
                                <?php esc_html_e( 'Más información', 'geg' ); ?>
                            </h6>
                        </a>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 mb-4 mb-lg-0 text-center">
                    <div class="d-none d-lg-block">
                    <?php if( get_sub_field('contenido_destacado_1') || get_sub_field('contenido_destacado_2')): ?>
                        <h5 class="text-uppercase">
                            <?php esc_html_e( 'Contenido destacado', 'geg' ); ?>
                        </h5>
                    <?php endif; ?>
                    <?php if( get_sub_field('contenido_destacado_1') ): ?>
                        <a href="<?php the_sub_field('contenido_destacado_1'); ?>">
                            <img src="<?php the_sub_field('imagen_del_contenido_destacado_1'); ?>" alt="" class="img-fluid mb-4">
                        </a>
                    <?php endif; ?>
                    <?php if( get_sub_field('contenido_destacado_2') ): ?>
                        <a href="<?php the_sub_field('contenido_destacado_2'); ?>">
                            <img src="<?php the_sub_field('imagen_del_contenido_destacado_2'); ?>" alt="" class="img-fluid">
                        </a>
                    <?php endif; ?>
                    </div>
                    <div class="d-block d-lg-none">
                        <ul class="social list-inline">
                        <?php if( get_sub_field('twitter') ): ?>
                            <li class="list-inline-item">
                                <a id="twitter" href="<?php the_sub_field('twitter'); ?>" target="_blank">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('facebook') ): ?>
                            <li class="list-inline-item">
                                <a id="facebook" href="<?php the_sub_field('facebook'); ?>" target="_blank">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('instagram') ): ?>
                            <li class="list-inline-item">
                                <a id="instagram" href="<?php the_sub_field('instagram'); ?>" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('linkedin') ): ?>
                            <li class="list-inline-item">
                                <a id="linkedin" href="<?php the_sub_field('linkedin'); ?>" target="_blank">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('youtube') ): ?>
                            <li class="list-inline-item">
                                <a id="youtube" href="<?php the_sub_field('youtube'); ?>" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('tiktok') ): ?>
                            <li class="list-inline-item">
                                <a id="tiktok" href="<?php the_sub_field('tiktok'); ?>" target="_blank">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('spotify') ): ?>
                            <li class="list-inline-item">
                                <a id="spotify" href="<?php the_sub_field('spotify'); ?>" target="_blank">
                                    <i class="fa-brands fa-spotify"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if( get_sub_field('google') ): ?>
                            <li class="list-inline-item">
                                <a id="google" href="<?php the_sub_field('google'); ?>" target="_blank">
                                    <i class="fa-brands fa-google"></i>
                                </a>
                            </li>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <ul class="list-inline btn-lang-vcard d-block d-lg-none">
                        <li class="list-inline-item">
                        <?php 
                            include get_theme_file_path( '/includes/lang-switcher.php' );
                            if ($langs_array) :
                        ?>  
                            <?php foreach ($langs_array as $lang) : ?>
                            <a class="btn btn-primary me-2" href="<?php echo $lang['url']; ?>">
                                <?php echo $lang['name']; ?>
                            </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>

    <section class="footer-vcard d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 text-center">
                    <address>
                        Blvd. Manuel Gómez Morín 9360 Edif. A. Local 3 Col. Partido Senecú C.P. 32545 Ciudad Juárez, Chihuahua, México (<a href="https://goo.gl/maps/ABAutm6XmfFgez77A" target="_blank"><?php esc_html_e( 'Ver mapa', 'geg' ); ?></a>)
                    </address>
                <?php if ( $currentlang == "en-US" ): ?>
                    <a class="text-uppercase" href="<?php echo get_page_link('698') ?>">
                        <?php esc_html_e( 'Aviso de Privacidad', 'geg' ); ?>
                    </a>
                <?php else: ?>
                    <a class="text-uppercase" href="<?php echo get_page_link('3') ?>">
                        <?php esc_html_e( 'Aviso de Privacidad', 'geg' ); ?>
                    </a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <figure>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="" class="logo img-fluid" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200" data-aos-once="true">
                        </figure>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400" data-aos-once="true">
                <?php if( have_rows('datos_de_contacto', 'option') ): while( have_rows('datos_de_contacto', 'option') ): the_row(); ?>
                    <h3><?php esc_html_e( 'Dirección', 'geg' ); ?></h3>
                    <address>
                        <p>
                            <?php the_sub_field('direccion'); ?>
                        </p>
                    </address>
                    <h3><?php esc_html_e( 'Contacto Corporativo', 'geg' ); ?></h3>
                    <?php if( have_rows('telefono_1') ): while( have_rows('telefono_1') ): the_row(); ?><a href="tel:+52<?php the_sub_field('telefono_sin_formato'); ?>"><?php the_sub_field('telefono_con_formato'); ?></a><?php endwhile; endif; ?> <?php esc_html_e( 'y', 'geg' ); ?> <?php if( have_rows('telefono_2') ): while( have_rows('telefono_2') ): the_row(); ?><a href="tel:+52<?php the_sub_field('telefono_sin_formato'); ?>"><?php the_sub_field('telefono_con_formato'); ?></a><?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="600" data-aos-once="true">
                    <h3 class="mt-3 mt-lg-0"><?php esc_html_e( 'Navegación', 'geg' ); ?></h3>
                    <nav>
                        <ul class="list-unstyled">
                        <?php if ( $currentlang == "en-US" ): ?>
                            <li>
                                <a href="<?php echo get_page_link('685'); ?>"><?php echo get_the_title('685'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('690'); ?>"><?php echo get_the_title('690'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('695'); ?>"><?php echo get_the_title('695'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('701'); ?>"><?php echo get_the_title('701'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('710'); ?>"><?php echo get_the_title('710'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('704'); ?>"><?php echo get_the_title('704'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('707'); ?>"><?php echo get_the_title('707'); ?></a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="<?php echo get_page_link('2'); ?>"><?php echo get_the_title('2'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('20'); ?>"><?php echo get_the_title('20'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('12'); ?>"><?php echo get_the_title('12'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('16'); ?>"><?php echo get_the_title('16'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('7'); ?>"><?php echo get_the_title('7'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('22'); ?>"><?php echo get_the_title('22'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_page_link('18'); ?>"><?php echo get_the_title('18'); ?></a>
                            </li>
                        <?php endif; ?>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="800" data-aos-once="true">
                    <h3 class="mt-3 mt-lg-0"><?php esc_html_e( 'Contáctanos', 'geg' ); ?></h3>
                    <nav>
                        <ul class="list-unstyled">
                            <li>
                            <?php if ( $currentlang == "en-US" ): ?>
                                <a href="<?php echo get_page_link('713'); ?>" class="btn btn-primary"><?php echo get_the_title('713'); ?></a>
                            <?php else: ?>
                                <a href="<?php echo get_page_link('14'); ?>" class="btn btn-primary"><?php echo get_the_title('14'); ?></a>
                            <?php endif; ?>
                            </li>
                        </ul>
                    </nav>
            <?php if( have_rows('datos_de_contacto', 'option') ): while( have_rows('datos_de_contacto', 'option') ): the_row(); ?>
                <?php if( have_rows('redes_sociales') ): while( have_rows('redes_sociales') ): the_row(); ?>
                    <ul class="social list-inline mt-4">
                    <?php if( get_sub_field('linkedin') ): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_sub_field('linkedin'); ?>" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_sub_field('youtube') ): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_sub_field('youtube'); ?>" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_sub_field('facebook') ): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_sub_field('facebook'); ?>" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_sub_field('instagram') ): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_sub_field('instagram'); ?>" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_sub_field('twitter') ): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_sub_field('twitter'); ?>" target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if( get_sub_field('tiktok') ): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_sub_field('tiktok'); ?>" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                    </ul>
                    <?php endif; ?>
                <?php endwhile; endif; ?>
            <?php endwhile; endif; ?>
                    <ul class="social list-inline mt-2">
                        <li class="list-inline-item">
                            <a href="https://open.spotify.com/show/3ywoYPFOUJYmZE8OAjHDhs" target="_blank">
                                <i class="fa-brands fa-spotify"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://music.amazon.com.mx/podcasts/65abd1cc-d794-45c2-9abb-a9560cbc2619/global-engineering-group" target="_blank">
                                <i class="fa-brands fa-amazon"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://podcasts.apple.com/mx/podcast/global-engineering-group/id1670720372" target="_blank">
                                <i class="fa-solid fa-podcast"></i>
                            </a>
                        </li>
                        <li class="list-inline-item" style="position: relative; top: 5px;">
                            <a href="https://podcasts.google.com/feed/aHR0cHM6Ly9hbmNob3IuZm0vcy9kOGIyM2I4NC9wb2RjYXN0L3Jzcw?sa=X&ved=0CAMQ4aUDahcKEwiYkovC7vz9AhUAAAAAHQAAAAAQAQ" target="_blank">
                                <img class="img-fluid" src="https://img.icons8.com/ios-filled/50/000000/google-podcasts.png" alt="" />
                            </a>
                        </li>   
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col text-end mt-4">
                    <?php if ( $currentlang == "en-US" ): ?><a href="<?php echo get_page_link('698') ?>"><?php esc_html_e( 'Aviso de Privacidad', 'geg' ); ?></a><?php else: ?><a href="<?php echo get_page_link('3') ?>"><?php esc_html_e( 'Aviso de Privacidad', 'geg' ); ?></a><?php endif; ?> | &copy;  <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Todos los derechos reservados.', 'geg' ); ?><br><?php esc_html_e( 'Hecho con', 'geg' ); ?> <i class="fa-solid fa-heart"></i> <?php esc_html_e( 'por', 'geg' ); ?> <a href="https://mixen.mx" target="_blank">Mixen</a>
                </div>
            </div>
        </div>
    </footer>

<?php if( have_rows('vcard') ): while( have_rows('vcard') ): the_row();  ?>
    <ul class="list-inline btn-lang-vcard-floating d-lg-none">
    <?php if( get_sub_field('vfc_link') ): ?>
        <li class="mb-3">
            <a href="<?php the_sub_field('vfc_link') ?>" class="btn btn-primary">
                <i class="fa-solid fa-user-plus"></i>
            </a>
        </li>
    <?php endif; ?>
        <li>
            <a href="https://www.addtoany.com/share#url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" class="btn btn-primary a2a_dd">
                <i class="fa-solid fa-share-nodes"></i>
            </a>
        </li>
    </ul>
<?php endwhile; endif; ?>

    <ul class="list-inline btn-lang d-none d-lg-block">
        <li class="list-inline-item">
        <?php 
            include get_theme_file_path( '/includes/lang-switcher.php' );
            if ($langs_array) :
        ?>  
            <?php foreach ($langs_array as $lang) : ?>
            <a class="btn btn-primary me-2" href="<?php echo $lang['url']; ?>">
                <?php echo $lang['name']; ?>
            </a>
            <?php endforeach; ?>
        <?php endif; ?>
        </li>
    </ul>

<?php get_footer(); ?>
