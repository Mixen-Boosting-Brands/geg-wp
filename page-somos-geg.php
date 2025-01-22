<?php 
    /* Template Name: Somos GEG */
    get_header();
    $currentlang = get_bloginfo('language');
?>

    <!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

    <section class="pt-60 pb-30" data-aos="fade-left" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-xl-6 my-auto">
                                <div class="card-body">
                                    <h1 class="card-title titulo-verde guion-izq"><span><?php esc_html_e( 'Somos', 'geg' ); ?></span> GEG</h1>
								<?php if( have_rows('somos_geg') ): while( have_rows('somos_geg') ): the_row(); ?>
                                    <p class="card-text"><?php the_sub_field('texto'); ?></p>
                                    <h3 class="card-text"><small class="text-muted text-uppercase">#<?php the_sub_field('hashtag'); ?></small></h3>
								<?php endwhile; endif; ?>
								</div>
                            </div>
                            <div class="col-xl-6 my-auto">
                                <div class="card-image card-image-right" <?php if( have_rows('somos_geg') ): while( have_rows('somos_geg') ): the_row(); ?>style="background: url('<?php the_sub_field('imagen'); ?>');"<?php endwhile; endif; ?>></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="section" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
        <div class="container">
            <div class="row">
                <div class="col">
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <section class="py-30">
        <div class="container">
            <div class="row" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                <div class="col">
                    <h1 class="titulo-verde guion-izq mb-4"><span><?php esc_html_e( 'Desarrollamos', 'geg' ); ?></span> <?php esc_html_e( 'valores', 'geg' ); ?></h1>
                </div>
            </div>
            <div class="row" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <div class="col">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-xl-6 my-auto">
                                <div class="card-body">
                                    <h2 class="card-title titulo-verde"><?php esc_html_e( 'Misión', 'geg' ); ?></h2>
								<?php if( have_rows('mision') ): while( have_rows('mision') ): the_row(); ?>
                                    <p class="card-text"><?php the_sub_field('texto'); ?></p>
								<?php endwhile; endif; ?>
                                </div>
                            </div>
                            <div class="col-xl-6 my-auto">
                                <div class="card-image card-image-right" <?php if( have_rows('mision') ): while( have_rows('mision') ): the_row(); ?>style="background: url('<?php the_sub_field('imagen'); ?>');"<?php endwhile; endif; ?>></div>
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
                            <div class="col-xl-6 my-auto">
                                <div class="card-image card-image-left" <?php if( have_rows('vision') ): while( have_rows('vision') ): the_row(); ?>style="background: url('<?php the_sub_field('imagen'); ?>');"<?php endwhile; endif; ?>></div>
                            </div>
                            <div class="col-xl-6 my-auto">
                                <div class="card-body text-end">
                                    <h2 class="card-title titulo-verde"><?php esc_html_e( 'Visión', 'geg' ); ?></h2>
								<?php if( have_rows('vision') ): while( have_rows('vision') ): the_row(); ?>
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

    <section class="valores py-30">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                <div class="col text-center">
                    <h1 class="titulo-verde guion-izq-centrado guion-der d-inline-block mb-4"><?php esc_html_e( 'Valores', 'geg' ); ?></h1>
                </div>
            </div>
		<?php if( have_rows('valores') ): while( have_rows('valores') ): the_row(); ?>
            <div class="row">
                <div class="col-12 col-sm-6 col-xl-3 mb-4" data-aos="fade-right" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
				<?php if( have_rows('valor_1') ): while( have_rows('valor_1') ): the_row(); ?>
                    <div class="valor">
                        <div class="caption">
                            <img src="<?php the_sub_field('icono'); ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid mb-3">
                            <h4><?php the_sub_field('titulo'); ?></h4>
                        </div>
                        <div class="caption-hover">
                            <div>
                                <h4><?php the_sub_field('titulo'); ?></h4>
                                <p><?php the_sub_field('texto'); ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
				<?php if( have_rows('valor_2') ): while( have_rows('valor_2') ): the_row(); ?>
                    <div class="valor">
                        <div class="caption">
                            <img src="<?php the_sub_field('icono'); ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid mb-3">
                            <h4><?php the_sub_field('titulo'); ?></h4>
                        </div>
                        <div class="caption-hover">
                            <div>
                                <h4><?php the_sub_field('titulo'); ?></h4>
                                <p><?php the_sub_field('texto'); ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
                </div>
				<div class="col-12 col-sm-6 col-xl-3 mb-4" data-aos="fade-left" data-aos-delay="900" data-aos-duration="800" data-aos-once="true">
				<?php if( have_rows('valor_3') ): while( have_rows('valor_3') ): the_row(); ?>
                    <div class="valor">
                        <div class="caption">
                            <img src="<?php the_sub_field('icono'); ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid mb-3">
                            <h4><?php the_sub_field('titulo'); ?></h4>
                        </div>
                        <div class="caption-hover">
                            <div>
                                <h4><?php the_sub_field('titulo'); ?></h4>
                                <p><?php the_sub_field('texto'); ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
                </div>
				<div class="col-12 col-sm-6 col-xl-3 mb-4" data-aos="fade-left" data-aos-delay="1200" data-aos-duration="800" data-aos-once="true">
				<?php if( have_rows('valor_4') ): while( have_rows('valor_4') ): the_row(); ?>
                    <div class="valor">
                        <div class="caption">
                            <img src="<?php the_sub_field('icono'); ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid mb-3">
                            <h4><?php the_sub_field('titulo'); ?></h4>
                        </div>
                        <div class="caption-hover">
                            <div>
                                <h4><?php the_sub_field('titulo'); ?></h4>
                                <p><?php the_sub_field('texto'); ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-xl-3 mb-4" data-aos="fade-right" data-aos-delay="1500" data-aos-duration="800" data-aos-once="true">
                <?php if( have_rows('valor_5') ): while( have_rows('valor_5') ): the_row(); ?>
					<div class="valor">
                        <div class="caption">
                            <img src="<?php the_sub_field('icono'); ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid mb-3">
                            <h4><?php the_sub_field('titulo'); ?></h4>
                        </div>
                        <div class="caption-hover">
                            <div>
                                <h4><?php the_sub_field('titulo'); ?></h4>
                                <p><?php the_sub_field('texto'); ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
                </div>
                <div class="col-12 col-sm-6 col-xl-6 mb-4" data-aos="fade-up" data-aos-delay="2100" data-aos-duration="800" data-aos-once="true">
				<?php if( have_rows('valor_6') ): while( have_rows('valor_6') ): the_row(); ?>
                    <div class="valor">
                        <div class="caption">
                            <img src="<?php the_sub_field('icono'); ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid mb-3">
                            <h4><?php the_sub_field('titulo'); ?></h4>
                        </div>
                        <div class="caption-hover">
                            <div>
                                <h4><?php the_sub_field('titulo'); ?></h4>
                                <p><?php the_sub_field('texto'); ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
                </div>
                <div class="col-12 col-sm-6 col-xl-3 mb-4" data-aos="fade-left" data-aos-delay="1800" data-aos-duration="800" data-aos-once="true">
                <?php if( have_rows('valor_7') ): while( have_rows('valor_7') ): the_row(); ?>
					<div class="valor">
                        <div class="caption">
                            <img src="<?php the_sub_field('icono'); ?>" alt="<?php the_sub_field('titulo'); ?>" class="img-fluid mb-3">
                            <h4><?php the_sub_field('titulo'); ?></h4>
                        </div>
                        <div class="caption-hover">
                            <div>
                                <h4><?php the_sub_field('titulo'); ?></h4>
                                <p><?php the_sub_field('texto'); ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; endif; ?>
                </div>
            </div>
		<?php endwhile; endif; ?>
        </div>
    </section>

    <section class="pt-30 pb-60">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
                <div class="col text-center">
                    <h1 class="titulo-verde titulo-doble guion-izq-centrado d-inline-block mb-4"><span><?php esc_html_e( 'Presencia', 'geg' ); ?></span> <?php esc_html_e( 'Nacional', 'geg' ); ?></h1>
                </div>
            </div>
            <div class="row mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="900" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
                <div class="col text-center">
				<?php if( have_rows('presencia_nacional') ): while( have_rows('presencia_nacional') ): the_row(); ?>
                    <img src="<?php the_sub_field('mapa'); ?>" alt="Presencia Nacional" class="img-fluid">
				<?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
