<?php 
    /* Template Name: Así lo construimos */
    get_header();
    $currentlang = get_bloginfo('language');
?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

    <section class="pt-60 pb-30">
        <div class="container">
            <div class="row" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <div class="col">
                    <h1 class="titulo-verde guion-izq mb-4"><span><?php esc_html_e( 'Así lo', 'geg' ); ?></span> <?php esc_html_e( 'construimos', 'geg' ); ?></h1>
                </div>
            </div>
            <div class="row" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
                <div class="col">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-7 my-auto">
                                <div class="card-body">
                                    <h2 class="card-title titulo-verde"><?php esc_html_e( 'La seguridad está primero', 'geg' ); ?></h2>
                                <?php if( have_rows('la_seguridad_esta_primero') ): while( have_rows('la_seguridad_esta_primero') ): the_row(); ?>
                                    <p class="card-text"><?php the_sub_field('texto'); ?></p>
                                    <h4 class="card-text"><small class="text-muted text-uppercase"><?php the_sub_field('texto_inferior'); ?></small></h4>
                                <?php endwhile; endif; ?>
                                </div>
                            </div>
                            <div class="col-md-5 my-auto">
                            <?php if( have_rows('la_seguridad_esta_primero') ): while( have_rows('la_seguridad_esta_primero') ): the_row(); ?>
                                <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt="...">
                            <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-30 pb-30" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-5 my-auto">
                            <?php if( have_rows('la_calidad_de_nuestro_servicio') ): while( have_rows('la_calidad_de_nuestro_servicio') ): the_row(); ?>
                                <img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt="...">
                            <?php endwhile; endif; ?>
                            </div>
                            <div class="col-md-7 my-auto">
                                <div class="card-body">
                                    <h2 class="card-title titulo-verde"><?php esc_html_e( 'La calidad de nuestro servicio', 'geg' ); ?></h2>
                                <?php if( have_rows('la_calidad_de_nuestro_servicio') ): while( have_rows('la_calidad_de_nuestro_servicio') ): the_row(); ?>
                                    <p class="card-text"><?php the_sub_field('texto'); ?></p>
                                <?php endwhile; endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="certificaciones pt-30 pb-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-verde guion-izq d-inline-block mb-4" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true"><?php esc_html_e( 'Certificaciones', 'geg' ); ?></h1>
                <?php if( have_rows('certificaciones') ): while( have_rows('certificaciones') ): the_row(); ?>
                    <p data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true"><?php the_sub_field('texto'); ?></p>
                <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="row">
<?php if( have_rows('seccion_de_certificaciones') ): while( have_rows('seccion_de_certificaciones') ): the_row(); ?>
    <?php if( have_rows('certificaciones') ): $i = 3; while( have_rows('certificaciones') ): the_row(); ?>
        <?php if( have_rows('certificacion_con_logo') ): $i = 3; while( have_rows('certificacion_con_logo') ): the_row(); ?>
            <div class="col-lg-6 mb-4" data-aos="fade-right" data-aos-delay="<?php echo $i; ?>00" data-aos-duration="800" data-aos-once="true">
                <div class="card my-auto">
                    <div class="card-body text-center">
                        <a href="<?php the_sub_field('link'); ?>" target="_blank">
                            <div class="texto-hover">
                                <div>
                                <?php if( get_sub_field('nombre') ): ?>
                                    <h4 class="card-title titulo-verde"><?php the_sub_field('nombre'); ?></h4>
                                <?php endif; ?>
                                <?php if( get_sub_field('texto') ): ?>
                                    <hp class="card-text"><?php the_sub_field('texto'); ?></h>
                                <?php endif; ?>  
                                </div>
                            </div>
                            <div class="texto">
                                <img src="<?php the_sub_field('logo'); ?>" alt="<?php the_sub_field('texto'); ?>" class="img-fluid mb-4">
                                <p class="card-text text-uppercase"><?php the_sub_field('texto_link'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    <?php endwhile; endif; ?>
<?php endwhile; endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
