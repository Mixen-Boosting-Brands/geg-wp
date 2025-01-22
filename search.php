<?php get_header(); ?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

	<section class="py-60">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="titulo-verde mb-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true">
						<?php echo sprintf( __( '%s resultado(s) para: ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>
					</h1>
				</div>
			</div>
			<div class="row" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
				<?php get_template_part( 'loop' ); ?>

				<?php echo bootstrap_pagination(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
