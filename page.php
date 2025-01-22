<?php get_header(); ?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

	<section class="py-60">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="titulo-verde mb-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true"><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row" data-aos="fade-right" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
				<div class="col">
				<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>
				<?php endwhile; ?>
				<?php else : ?>
					<p><?php esc_html_e( 'Lo sentimos, no hay nada que mostrar aquí.', 'geg' ); ?></p>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
