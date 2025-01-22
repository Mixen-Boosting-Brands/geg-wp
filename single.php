<?php get_header(); ?>

	<!-- Incluir header interna -->
    <?php include get_template_directory() . '/includes/header-interna.php'; ?>
    <!-- /Incluir header interna -->

	<section class="py-60">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h1 class="titulo-verde mb-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800" data-aos-once="true"><?php the_title(); ?></h1>
				<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
					<ul class="detalles-post list-inline mb-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800" data-aos-once="true">
						<li class="list-inline-item">
							<i class="fa-solid fa-circle-user"></i> <?php the_author_posts_link(); ?>
						</li>
						<li class="list-inline-item">
						<i class="fa-solid fa-clock"></i> <time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>"><?php the_date(); ?> <?php the_time(); ?></time>
						</li>
						<li class="list-inline-item">
							<i class="fa-solid fa-tag"></i> <?php esc_html_e( '', 'geg' ); the_category( ', ' ); // Separated by commas. ?>
						</li>
						<li class="list-inline-item">
							<i class="fa-solid fa-comments"></i> <?php if ( comments_open( get_the_ID() ) ) comments_popup_link( __( 'Deja tus comentarios', 'geg' ), __( '1 comentario', 'geg' ), __( '% comentarios', 'geg' ) ); ?>
						</li>
					</ul>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="row" data-aos="fade-right" data-aos-delay="900" data-aos-duration="800" data-aos-once="true">
				<div class="col">
				<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<div class="mt-4">
						<?php comments_template(); ?>
					</div>
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