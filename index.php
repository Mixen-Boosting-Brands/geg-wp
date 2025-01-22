<?php
    get_header();
    $currentlang = get_bloginfo('language');
?>

<?php if ( $currentlang == "en-US" ): ?>
	<section class="carrusel-tipo-1 d-none d-md-block">
        <div id="carouselIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
            <?php if( have_rows('carrusel_en', 'option') ): $i = 1; while( have_rows('carrusel_en', 'option') ): the_row(); ?>
                <div class="carousel-item <?php if( $i == 1 ): ?>active<?php endif; ?>" style="background: url('<?php the_sub_field('imagen_de_fondo'); ?>');">
                    <div class="overlay">
                        <div class="caption">
                            <h1><?php the_sub_field('titulo'); ?></h1>
                            <p><?php the_sub_field('texto'); ?></p>
                    <?php if( have_rows('boton', 'option') ): $i = 1; while( have_rows('boton', 'option') ): the_row(); ?>
                        <?php if( get_sub_field('usar_link_a_un_sitio_externo') ): ?>
                            <?php if( get_sub_field('texto_del_boton') ): ?>
                            <a href="<?php the_sub_field('link_externo'); ?>" class="btn btn-primary" target="_blank"><?php the_sub_field('texto_del_boton'); ?></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if( get_sub_field('texto_del_boton') ): ?>
                            <a href="<?php the_sub_field('link'); ?>" class="btn btn-primary"><?php the_sub_field('texto_del_boton'); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            <?php $i++; endwhile; endif; ?>
            </div>
            <div class="carousel-indicators">
            <?php if( have_rows('carrusel_en', 'option') ): $i = 0; while( have_rows('carrusel_en', 'option') ): the_row(); ?>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="<?php echo $i; ?>" <?php if( $i == 0 ): ?>class="active" aria-current="true"<?php endif; ?> aria-label="Slide <?php echo $i; ?>"></button>
            <?php $i++; endwhile; endif; ?>
            </div>
        <?php if( have_rows('carrusel_en', 'option') ): $i = 0; while( have_rows('carrusel_en', 'option') ): the_row(); ?>
            <?php if( $i >= 1 ): ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                <i class="fa-solid fa-circle-chevron-left" aria-hidden="true"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                <i class="fa-solid fa-circle-chevron-right" aria-hidden="true"></i>
                <span class="visually-hidden">Next</span>
            </button>
            <?php endif; ?>
        <?php $i++; endwhile; endif; ?>
        </div>
    </section>

    <section class="carrusel-tipo-1-movil d-block d-md-none">
        <div id="carouselIndicatorsMovil" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
            <?php if( have_rows('carrusel_en', 'option') ): $j = 1; while( have_rows('carrusel_en', 'option') ): the_row(); ?>
                <div class="carousel-item <?php if( $j == 1 ): ?>active<?php endif; ?>" style="background: url('<?php $image = get_sub_field('imagen_de_fondo_movil'); if ($image) { echo esc_url($image); } ?>');">
                    <div class="overlay">
                        <div class="caption">
                            <h1><?php the_sub_field('titulo'); ?></h1>
                            <p><?php the_sub_field('texto'); ?></p>
                    <?php if( have_rows('boton', 'option') ): $j = 1; while( have_rows('boton', 'option') ): the_row(); ?>
                        <?php if( get_sub_field('usar_link_a_un_sitio_externo') ): ?>
                            <?php if( get_sub_field('texto_del_boton') ): ?>
                            <a href="<?php the_sub_field('link_externo'); ?>" class="btn btn-primary" target="_blank"><?php the_sub_field('texto_del_boton'); ?></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if( get_sub_field('texto_del_boton') ): ?>
                            <a href="<?php the_sub_field('link'); ?>" class="btn btn-primary"><?php the_sub_field('texto_del_boton'); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            <?php $j++; endwhile; endif; ?>
            </div>
            <div class="carousel-indicators">
            <?php if( have_rows('carrusel_en', 'option') ): $j = 0; while( have_rows('carrusel_en', 'option') ): the_row(); ?>
                <button type="button" data-bs-target="#carouselIndicatorsMovil" data-bs-slide-to="<?php echo $j; ?>" <?php if( $j == 0 ): ?>class="active" aria-current="true"<?php endif; ?> aria-label="Slide <?php echo $j; ?>"></button>
            <?php $j++; endwhile; endif; ?>
            </div>
        <?php if( have_rows('carrusel_en', 'option') ): $j = 0; while( have_rows('carrusel_en', 'option') ): the_row(); ?>
            <?php if( $j >= 1 ): ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicatorsMovil" data-bs-slide="prev">
                <i class="fa-solid fa-circle-chevron-left" aria-hidden="true"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicatorsMovil" data-bs-slide="next">
                <i class="fa-solid fa-circle-chevron-right" aria-hidden="true"></i>
                <span class="visually-hidden">Next</span>
            </button>
            <?php endif; ?>
        <?php $j++; endwhile; endif; ?>
        </div>
    </section>
<?php else: ?>
    <section class="carrusel-tipo-1 d-none d-md-block">
        <div id="carouselIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
            <?php if( have_rows('carrusel', 'option') ): $i = 1; while( have_rows('carrusel', 'option') ): the_row(); ?>
                <div class="carousel-item <?php if( $i == 1 ): ?>active<?php endif; ?>" style="background: url('<?php the_sub_field('imagen_de_fondo'); ?>');">
                    <div class="overlay">
                        <div class="caption">
                            <h1><?php the_sub_field('titulo'); ?></h1>
                            <p><?php the_sub_field('texto'); ?></p>
                    <?php if( have_rows('boton', 'option') ): $i = 1; while( have_rows('boton', 'option') ): the_row(); ?>
                        <?php if( get_sub_field('usar_link_a_un_sitio_externo') ): ?>
                            <?php if( get_sub_field('texto_del_boton') ): ?>
                            <a href="<?php the_sub_field('link_externo'); ?>" class="btn btn-primary" target="_blank"><?php the_sub_field('texto_del_boton'); ?></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if( get_sub_field('texto_del_boton') ): ?>
                            <a href="<?php the_sub_field('link'); ?>" class="btn btn-primary"><?php the_sub_field('texto_del_boton'); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            <?php $i++; endwhile; endif; ?>
            </div>
            <div class="carousel-indicators">
            <?php if( have_rows('carrusel', 'option') ): $i = 0; while( have_rows('carrusel', 'option') ): the_row(); ?>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="<?php echo $i; ?>" <?php if( $i == 0 ): ?>class="active" aria-current="true"<?php endif; ?> aria-label="Slide <?php echo $i; ?>"></button>
            <?php $i++; endwhile; endif; ?>
            </div>
        <?php if( have_rows('carrusel', 'option') ): $i = 0; while( have_rows('carrusel', 'option') ): the_row(); ?>
            <?php if( $i >= 1 ): ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                <i class="fa-solid fa-circle-chevron-left" aria-hidden="true"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                <i class="fa-solid fa-circle-chevron-right" aria-hidden="true"></i>
                <span class="visually-hidden">Next</span>
            </button>
            <?php endif; ?>
        <?php $i++; endwhile; endif; ?>
        </div>
    </section>

    <section class="carrusel-tipo-1-movil d-block d-md-none">
        <div id="carouselIndicatorsMovil" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
            <?php if( have_rows('carrusel', 'option') ): $j = 1; while( have_rows('carrusel', 'option') ): the_row(); ?>
                <div class="carousel-item <?php if( $j == 1 ): ?>active<?php endif; ?>" style="background: url('<?php $image = get_sub_field('imagen_de_fondo_movil'); if ($image) { echo esc_url($image); } ?>');">
                    <div class="overlay">
                        <div class="caption">
                            <h1><?php the_sub_field('titulo'); ?></h1>
                            <p><?php the_sub_field('texto'); ?></p>
                    <?php if( have_rows('boton', 'option') ): $j = 1; while( have_rows('boton', 'option') ): the_row(); ?>
                        <?php if( get_sub_field('usar_link_a_un_sitio_externo') ): ?>
                            <?php if( get_sub_field('texto_del_boton') ): ?>
                            <a href="<?php the_sub_field('link_externo'); ?>" class="btn btn-primary" target="_blank"><?php the_sub_field('texto_del_boton'); ?></a>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if( get_sub_field('texto_del_boton') ): ?>
                            <a href="<?php the_sub_field('link'); ?>" class="btn btn-primary"><?php the_sub_field('texto_del_boton'); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            <?php $j++; endwhile; endif; ?>
            </div>
            <div class="carousel-indicators">
            <?php if( have_rows('carrusel', 'option') ): $j = 0; while( have_rows('carrusel', 'option') ): the_row(); ?>
                <button type="button" data-bs-target="#carouselIndicatorsMovil" data-bs-slide-to="<?php echo $j; ?>" <?php if( $j == 0 ): ?>class="active" aria-current="true"<?php endif; ?> aria-label="Slide <?php echo $j; ?>"></button>
            <?php $j++; endwhile; endif; ?>
            </div>
        <?php if( have_rows('carrusel', 'option') ): $j = 0; while( have_rows('carrusel', 'option') ): the_row(); ?>
            <?php if( $j >= 1 ): ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicatorsMovil" data-bs-slide="prev">
                <i class="fa-solid fa-circle-chevron-left" aria-hidden="true"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicatorsMovil" data-bs-slide="next">
                <i class="fa-solid fa-circle-chevron-right" aria-hidden="true"></i>
                <span class="visually-hidden">Next</span>
            </button>
            <?php endif; ?>
        <?php $j++; endwhile; endif; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>