<?php 
    /* Template Name: Proveedores y contratistas */
    get_header();
    $currentlang = get_bloginfo('language');
?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

    <section class="pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <?php if( have_rows('texto_superior_formulario') ): while( have_rows('texto_superior_formulario') ): the_row(); ?>
                    <?php the_sub_field('texto'); ?>
                <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-30 pb-60">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <div class="col">
                    <div class="accordion accordion-flush" id="acordion-formularios">
                        <div class="accordion-item mb-4">
                            <h1 class="accordion-header text-center" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <?php esc_html_e( 'Formulario Proveedores', 'geg' ); ?>
                                </button>
                            </h1>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#acordion-formularios">
                                <div class="accordion-body">
                                    <!-- Incluir formulario proveedores -->
                                    <?php include get_template_directory() . '/includes/formulario-proveedores.php'; ?>
                                    <!-- /Incluir proveedores -->
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h1 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <?php esc_html_e( 'Formulario Contratistas', 'geg' ); ?>
                                </button>
                            </h1>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#acordion-formularios">
                                <div class="accordion-body">
                                    <!-- Incluir formulario contratistas -->
                                    <?php include get_template_directory() . '/includes/formulario-contratistas.php'; ?>
                                    <!-- /Incluir contratistas -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
