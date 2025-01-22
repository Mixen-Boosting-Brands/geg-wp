<?php get_header(); ?>

	<section class="banner-superior" data-parallax="scroll" data-image-src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404/header-404.png">
        <div class="overlay">
            <div class="caption">
                <h1 data-aos="fade-right" data-aos-once="true">Error 404</h1>
                <p data-aos="fade-right" data-aos-delay="300" data-aos-once="true"><?php esc_html_e( 'Lo sentimos, ocurrió un error.', 'geg' ); ?></p>
            </div>
        </div>
    </section>

	<section class="py-60">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="titulo-verde" data-aos="fade-right"  data-aos-delay="600" data-aos-once="true"><span>Error 404:</span> <?php esc_html_e( 'Página no encontrada', 'geg' ); ?></h1>
					<p data-aos="fade-right"  data-aos-delay="800" data-aos-once="true"><?php esc_html_e( 'Lo sentimos, la página que solicitaste no existe o cambió de ubicación. Te recomendamos', 'geg' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'regresar al inicio', 'geg' ); ?></a>.</p>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
