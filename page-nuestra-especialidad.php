<?php 
    /* Template Name: Nuestra especialidad */
    get_header();
    $currentlang = get_bloginfo('language');
?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

    <section class="py-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-verde guion-izq" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true"><span><?php esc_html_e( 'Nuestra', 'geg' ); ?></span> <?php esc_html_e( 'especialidad', 'geg' ); ?></h1>
                <?php if( have_rows('seccion_nuestra_especialidad') ): while( have_rows('seccion_nuestra_especialidad') ): the_row(); ?>
                    <p data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true"><?php the_sub_field('texto'); ?></p>
                <?php endwhile; endif; ?>
                </div>
            </div>
            <!-- Incluir carrusel -->
            <?php include get_template_directory() . '/includes/carrusel-nuestra-especialidad.php'; ?>
            <!-- /Incluir carrusel -->
        </div>
    </section>

    <section class="proyectos py-60" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
        <div class="container">
            <!-- Incluir carrusel -->
            <?php include get_template_directory() . '/includes/carrusel-proyectos.php'; ?>
            <!-- /Incluir carrusel -->
        </div>
    </section>

    <section class="casos-de-exito py-60">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="titulo-verde guion-izq" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true"><span><?php esc_html_e( 'Casos de', 'geg' ); ?></span> <?php esc_html_e( 'éxito', 'geg' ); ?></h1>
                <?php if( have_rows('seccion_casos_de_exito') ): while( have_rows('seccion_casos_de_exito') ): the_row(); ?>
                    <p data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true"><?php the_sub_field('texto'); ?></p>
                <?php endwhile; endif; ?>
                </div>
            </div>
    <?php if( have_rows('seccion_casos_de_exito') ): while( have_rows('seccion_casos_de_exito') ): the_row(); ?>
        <?php if( have_rows('logos') ): while( have_rows('logos') ): the_row(); ?>
            <div class="row text-center">
            <?php for ($i = 1; $i <= 30; $i++): // Cantidad de logos a mostrar ?>
                <div class="col-6 col-lg-3 my-auto" data-aos="fade-up" data-aos-delay="<?php echo $i; ?>00" data-aos-duration="800" data-aos-once="true">
                    <img src="<?php the_sub_field('logo_' . $i); ?>" alt="" class="logo-cliente img-fluid my-3">
                </div>
            <?php endfor; ?>
            </div>
        <?php endwhile; endif; ?>
    <?php endwhile; endif; ?>
        </div>
    </section>

<?php get_footer(); ?>
