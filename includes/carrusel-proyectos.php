<?php if ( $currentlang == "en-US" ): ?>
    <div class="row">
        <div class="col-10 offset-1">
            <div class="carrusel-tipo-3">
                <div id="carruselTipo3" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <?php 
                        $args = array(
                            'post_type' => 'proyectos',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'estado',
                                    'field' => 'slug',
                                    'terms' => 'chihuahua-en'
                                )
                            )
                        );

                        $the_query = new WP_Query( $args );
                    ?>
                    <?php if ($the_query->have_posts()): $i = 0; while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="carousel-item <?php if( $i == 0 ): ?>active<?php endif; ?>" data-bs-interval="10000">
                        <?php if( have_rows('proyecto') ): while( have_rows('proyecto') ): the_row(); ?>
                            <div class="row">
                                <div class="col">
                                    <h4><?php esc_html_e( 'Proyecto', 'geg' ); ?></h4>
                                    <h1 class="titulo-verde"><?php the_title(); ?></h1>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                            <?php if( have_rows('datos') ): while( have_rows('datos') ): the_row(); ?>
                                <div class="col-lg-5">
                                    <ul class="especificaciones list-unstyled mb-4">
                                    <?php if( get_sub_field('ubicacion') ): ?>
                                        <li>
                                            <span><?php esc_html_e( 'Ubicación:', 'geg' ); ?></span> <?php the_sub_field('ubicacion'); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('area') ): ?>
                                        <li>
                                            <span><?php esc_html_e( 'Área:', 'geg' ); ?></span> <?php the_sub_field('area'); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('ano') ): ?>
                                        <li>
                                            <span><?php esc_html_e( 'Año:', 'geg' ); ?></span> <?php the_sub_field('ano'); ?>
                                        </li>
                                    <?php endif; ?>
                                    </ul>
                                    <div class="row">
                                        <div class="col-10 offset-1">
                                            <div class="caracteristicas mb-4 mb-lg-0">
                                            <?php 
                                                $currentlang = get_bloginfo('language');
                                                if ( $currentlang == "en-US" ):
                                            ?>
                                                <ul>
                                                <?php if( have_rows('caracteristicas_en') ): while( have_rows('caracteristicas_en') ): the_row(); ?>
                                                    <li><?php the_sub_field('caracteristica'); ?></li>
                                                <?php endwhile; endif; ?>
                                                </ul>
                                            <?php else: ?>
                                                <ul>
                                                <?php if( have_rows('caracteristicas') ): while( have_rows('caracteristicas') ): the_row(); ?>
                                                    <li><?php the_sub_field('caracteristica'); ?></li>
                                                <?php endwhile; endif; ?>
                                                </ul>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 my-auto">
                                <?php if( get_sub_field('imagenes') ): ?>
                                    <div class="fotos-proyectos" data-flickity='{ "autoPlay": true, "fade": true, "imagesLoaded": true, "wrapAround": true, "prevNextButtons": false, "draggable": false, "lazyLoad": true }'>
                                    <!-- Slides -->
                                    <?php if( have_rows('imagenes') ): while( have_rows('imagenes') ): the_row(); ?>
                                        <div class="carousel-cell">
                                            <figure>
                                                <img data-flickity-lazyload="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                    <?php endwhile; endif; ?>
                                    </div>
                                <?php endif; ?>
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                        <?php endwhile; endif; ?>
                        </div>
                    <?php $i++; endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carruselTipo3" data-bs-slide="prev">
                        <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carruselTipo3" data-bs-slide="next">
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="row">
        <div class="col-10 offset-1">
            <div class="carrusel-tipo-3">
                <div id="carruselTipo3" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <?php 
                        $args = array(
                            'post_type' => 'proyectos',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array (
                                    'taxonomy' => 'estado',
                                    'field' => 'slug',
                                    'terms' => 'chihuahua'
                                )
                            )
                        );

                        $the_query = new WP_Query( $args );
                    ?>
                    <?php if ($the_query->have_posts()): $i = 0; while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="carousel-item <?php if( $i == 0 ): ?>active<?php endif; ?>" data-bs-interval="10000">
                        <?php if( have_rows('proyecto') ): while( have_rows('proyecto') ): the_row(); ?>
                            <div class="row">
                                <div class="col">
                                    <h4><?php esc_html_e( 'Proyecto', 'geg' ); ?></h4>
                                    <h1 class="titulo-verde"><?php the_title(); ?></h1>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                            <?php if( have_rows('datos') ): while( have_rows('datos') ): the_row(); ?>
                                <div class="col-lg-5">
                                    <ul class="especificaciones list-unstyled mb-4">
                                    <?php if( get_sub_field('ubicacion') ): ?>
                                        <li>
                                            <span><?php esc_html_e( 'Ubicación:', 'geg' ); ?></span> <?php the_sub_field('ubicacion'); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('area') ): ?>
                                        <li>
                                            <span><?php esc_html_e( 'Área:', 'geg' ); ?></span> <?php the_sub_field('area'); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('ano') ): ?>
                                        <li>
                                            <span><?php esc_html_e( 'Año:', 'geg' ); ?></span> <?php the_sub_field('ano'); ?>
                                        </li>
                                    <?php endif; ?>
                                    </ul>
                                    <div class="row">
                                        <div class="col-10 offset-1">
                                            <div class="caracteristicas mb-4 mb-lg-0">
                                            <?php 
                                                $currentlang = get_bloginfo('language');
                                                if ( $currentlang == "en-US" ):
                                            ?>
                                                <ul>
                                                <?php if( have_rows('caracteristicas_en') ): while( have_rows('caracteristicas_en') ): the_row(); ?>
                                                    <li><?php the_sub_field('caracteristica'); ?></li>
                                                <?php endwhile; endif; ?>
                                                </ul>
                                            <?php else: ?>
                                                <ul>
                                                <?php if( have_rows('caracteristicas') ): while( have_rows('caracteristicas') ): the_row(); ?>
                                                    <li><?php the_sub_field('caracteristica'); ?></li>
                                                <?php endwhile; endif; ?>
                                                </ul>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 my-auto">
                                <?php if( get_sub_field('imagenes') ): ?>
                                    <div class="fotos-proyectos" data-flickity='{ "autoPlay": true, "fade": true, "imagesLoaded": true, "wrapAround": true, "prevNextButtons": false, "draggable": false, "lazyLoad": true }'>
                                    <!-- Slides -->
                                    <?php if( have_rows('imagenes') ): while( have_rows('imagenes') ): the_row(); ?>
                                        <div class="carousel-cell">
                                            <figure>
                                                <img data-flickity-lazyload="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt="">
                                            </figure>
                                        </div>
                                    <?php endwhile; endif; ?>
                                    </div>
                                <?php endif; ?>
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                        <?php endwhile; endif; ?>
                        </div>
                    <?php $i++; endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carruselTipo3" data-bs-slide="prev">
                        <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carruselTipo3" data-bs-slide="next">
                        <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>