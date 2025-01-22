<!-- search -->
<form class="search" method="get" action="<?php echo esc_url( home_url() ); ?>">
	<div id="search-input" class="input-group input-group-lg" role="search">
		<input id="search-input-field" class="form-control search-input" type="search" name="s" aria-label="<?php esc_html_e( 'Buscar', 'geg' ); ?>" placeholder="<?php esc_html_e( 'Buscar', 'geg' ); ?>">
		<button id="search-submit" class="btn btn-primary search-submit" type="submit">
			<i class="fa-solid fa-magnifying-glass"></i>
		</button>
	</div>
</form>
<!-- /search -->