<?php 
    /* Template Name: Bolsa de trabajo */
    get_header();
    $currentlang = get_bloginfo('language');
?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

    <section class="pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col mb-4" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <?php if( have_rows('texto_superior') ): while( have_rows('texto_superior') ): the_row(); ?>
                    <p><?php the_sub_field('texto'); ?></p>
                <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
                    <h1 class="titulo-verde guion-izq"><span><?php esc_html_e( 'Vacantes', 'geg' ); ?></span> <?php esc_html_e( 'Disponibles', 'geg' ); ?></h1>
                </div>
            </div>
            <!-- Incluir carrusel -->
            <?php include get_template_directory() . '/includes/carrusel-vacantes.php'; ?>
            <!-- /Incluir carrusel -->
        </div>
    </section>

    <section class="pt-30 pb-60">
        <div class="container">
            <div class="row mb-4" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                <div class="col">
                    <h1 class="guion-izq"><?php esc_html_e( 'Postúlate', 'geg' ); ?></h1>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <div class="col">
                    <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                    <div id="form-messages"></div>
                    <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                    <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/mailer-bolsa-de-trabajo.php" method="POST" class="row g-3 needs-validation formulario-bolsa-de-trabajo" id="ajax-contact-bolsa" novalidate>
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control shadow-none" id="nombre" name="nombre" placeholder="<?php esc_html_e( 'Nombre', 'geg' ); ?>*"
                                pattern=".{5,50}" required>
                            <label for="nombre" class="form-label"><?php esc_html_e( 'Nombre', 'geg' ); ?>*</label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor introduce tu nombre completo.', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="email" class="form-control shadow-none" id="correo" name="correo" placeholder="<?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*"
                                required>
                            <label for="correo" class="form-label"><?php esc_html_e( 'Correo electrónico', 'geg' ); ?>*</label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor introduce un correo electrónico válido.', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="tel" class="form-control shadow-none" id="telefono" name="telefono" placeholder="<?php esc_html_e( 'Teléfono', 'geg' ); ?>*"
                                pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                            <label for="telefono" class="form-label"><?php esc_html_e( 'Teléfono', 'geg' ); ?>*</label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor escribe un número de teléfono válido (Ej: 6561234567).', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <select class="form-select" id="puesto" name="puesto" aria-label="<?php esc_html_e( 'Puesto', 'geg' ); ?>" required>
                                <option selected disabled value=""><?php esc_html_e( 'Puesto al que deseas postularte', 'geg' ); ?></option>
                            <?php 
                                $args = array(
                                    'post_type' => 'vacantes'
                                );

                                $the_query = new WP_Query( $args );
                            ?>
                            <?php if ($the_query->have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                            <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                            </select>
                            <label for="puesto"><?php esc_html_e( 'Puesto', 'geg' ); ?>*</label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor selecciona el puesto al que deseas postularte.', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-12 form-floating mb-4">
                            <textarea class="form-control shadow-none" id="comentarios" name="comentarios" placeholder="<?php esc_html_e( 'Comentarios', 'geg' ); ?>"></textarea>
                            <label for="comentarios"><?php esc_html_e( 'Comentarios', 'geg' ); ?></label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor introduce tus comentarios.', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 my-auto">
                            <label for="userfile" class="form-label btn btn-primary">
                                <i class="fas fa-file-pdf"></i> <?php esc_html_e( 'Sube tu CV en formato PDF', 'geg' ); ?>*
                            </label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                            <input type="file" class="form-control form-control-sm mb-4" id="userfile" name="userfile[]" multiple="multiple" aria-describedby="fileUploadBlock" required>
                            <div id="fileUploadBlock" class="form-text mb-5">
                                <?php esc_html_e( 'Tamaño máximo de archivo: 10 MB', 'geg' ); ?>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="privacidad" required>
                                <label class="form-check-label" for="privacidad">
                                    <?php esc_html_e( 'Acepto el', 'geg' ); ?> <?php if ( $currentlang=="en-US" ): ?><a href="<?php echo get_page_link('698'); ?>"><?php echo get_the_title('698'); ?></a><?php else: ?><a href="<?php echo get_page_link('3'); ?>"><?php esc_html_e( 'Aviso de Privacidad', 'geg' ); ?></a><?php endif; ?>
                                </label>
                                <div class="invalid-feedback">
                                    <?php esc_html_e( 'Debes de aceptar nuestro aviso de privacidad para poder enviar tu currículum.', 'geg' ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 my-auto text-end">
                            <button type="submit" class="btn btn-primary btn-block"><?php esc_html_e( 'Enviar', 'geg' ); ?></button>
                            <div id="hold-on-a-sec">
                                <i id="contact-spinner" class="fas fa-spinner fa-spin"></i> <?php esc_html_e( 'Espera un momento por favor...', 'geg' ); ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
