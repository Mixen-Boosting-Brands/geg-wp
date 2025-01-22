<?php 
    /* Template Name: Movimiento Global */
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
            <div class="row mb-4">
                <div class="col">
                    <h1 class="titulo-verde guion-izq mb-4" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true"><span><?php esc_html_e( 'Conoce', 'geg' ); ?></span> <?php esc_html_e( 'los beneficios', 'geg' ); ?></h1>
                    <ul>
                    <?php if( have_rows('conoce_lo_beneficios') ): $i = 1; while( have_rows('conoce_lo_beneficios') ): the_row(); ?>
                        <li data-aos="fade-right" data-aos-delay="<?php echo $i; ?>00" data-aos-duration="800" data-aos-once="true"><?php the_sub_field('beneficio'); ?></li>
                    <?php $i++; endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-300" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mb-4"><?php esc_html_e( 'Llena el siguiente formulario', 'geg' ); ?></h1>
                    <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                    <div id="form-messages"></div>
                    <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                    <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/mailer-movimiento-global.php" method="POST" class="row g-3 needs-validation formulario-movimiento-global" id="ajax-contact-movimiento" novalidate>
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control shadow-none" id="nombre" name="nombre" placeholder="<?php esc_html_e( 'Nombre completo', 'geg' ); ?>*"
                                pattern=".{5,50}" required>
                            <label for="nombre" class="form-label"><?php esc_html_e( 'Nombre completo', 'geg' ); ?>*</label>
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
                                <?php esc_html_e( ' Por favor introduce un correo electrónico válido.', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="number" class="form-control shadow-none" id="edad" name="edad" placeholder="<?php esc_html_e( 'Edad', 'geg' ); ?>*"
                                pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==2) return false;" required>
                            <label for="edad" class="form-label"><?php esc_html_e( 'Edad', 'geg' ); ?>*</label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor introduce tu edad actual.', 'geg' ); ?>
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
                            <input type="text" class="form-control shadow-none" id="carrera" name="carrera" placeholder="<?php esc_html_e( 'Carrera', 'geg' ); ?>*"
                                pattern=".{5,50}" required>
                            <label for="carrera" class="form-label"><?php esc_html_e( 'Carrera', 'geg' ); ?>*</label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor introduce tu carrera profesional.', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control shadow-none" id="semestre" name="semestre" placeholder="<?php esc_html_e( 'Semestre', 'geg' ); ?>*"
                                pattern=".{1,50}" required>
                            <label for="semestre" class="form-label"><?php esc_html_e( 'Semestre', 'geg' ); ?>*</label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor introduce tu semestre actual.', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control shadow-none" id="universidad" name="universidad" placeholder="<?php esc_html_e( 'Universidad', 'geg' ); ?>*"
                                pattern=".{3,50}" required>
                            <label for="universidad" class="form-label"><?php esc_html_e( 'Universidad', 'geg' ); ?>*</label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor introduce el nombre de tu universidad.', 'geg' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 form-floating mb-4">
                            <select class="form-select" id="estado" name="estado" aria-label="<?php esc_html_e( 'Estado', 'geg' ); ?>*" required>
                                <option selected disabled value=""><?php esc_html_e( 'Estado', 'geg' ); ?>*</option>
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="CDMX">Ciudad de México</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Durango">Durango</option>
                                <option value="Estado de México">Estado de México</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="Michoacán">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz">Veracruz</option>
                                <option value="Yucatán">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
                            </select>
                            <label for="estado"><?php esc_html_e( 'Estado', 'geg' ); ?></label>
                            <div class="valid-feedback">
                                <?php esc_html_e( '¡Se ve bien!', 'geg' ); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php esc_html_e( 'Por favor selecciona tu Estado.', 'geg' ); ?>
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

    <section class="pt-30 pb-60">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <div class="col text-center">
                    <h1 class="titulo-verde titulo-doble guion-izq d-inline-block mb-4"><span><?php esc_html_e( 'Convenios', 'geg' ); ?></span> <?php esc_html_e( 'Empresariales', 'geg' ); ?></h1>
                </div>
            </div>
            <div class="row mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
                <div class="col mb-4 text-center">
                <?php if( have_rows('convenios_empresariales') ): while( have_rows('convenios_empresariales') ): the_row(); ?>
                    <p><?php the_sub_field('texto'); ?></p>
                <?php endwhile; endif; ?>
                </div>
            </div>
            <div class="row">
            <?php if( have_rows('convenios_empresariales') ): while( have_rows('convenios_empresariales') ): the_row(); ?>
                <?php if( have_rows('descuentos') ): $i = 1; while( have_rows('descuentos') ): the_row(); ?>
                <div class="col-md-4 mb-4 text-center" data-aos="fade-right" data-aos-delay="<?php echo $i; ?>00" data-aos-duration="800" data-aos-once="true">
                    <img src="<?php the_sub_field('icono'); ?>" alt="" class="img-fluid mb-2">
                    <p><?php the_sub_field('texto'); ?></p>
                </div>
                <?php $i++; endwhile; endif; ?>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
