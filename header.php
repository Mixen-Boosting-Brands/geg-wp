<?php $currentlang = get_bloginfo("language"); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    wp_title("");
    if (wp_title("", false)) {
        echo " - ";
    }
    bloginfo("name");
    ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/css/styles.css">
    <!-- link rel="stylesheet" href="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>/assets/css/styles.css?ver=< echo rand(111,999); >" -->

	<?php wp_head(); ?>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10903851958"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-10903851958'); </script>

<?php if (is_page("4786")): ?>
    <!-- Event snippet for Website traffic conversion page -->
    <script> gtag('event', 'conversion', {'send_to': 'AW-10903851958/wlQtCIeC85EYELanrs8o'}); </script>
<?php endif; ?>
</head>
<body>
<?php if (
    "vcards" !== get_post_type()
):// Ocultar lo siguiente si se está renderizando una vCard
     ?>
    <ul class="podcast list-unstyled d-none d-lg-block">
        <li>
            <a href="https://open.spotify.com/show/3ywoYPFOUJYmZE8OAjHDhs" target="_blank">
                <i class="fa-brands fa-spotify"></i>
            </a>
        </li>
        <li>
            <a href="https://music.amazon.com.mx/podcasts/65abd1cc-d794-45c2-9abb-a9560cbc2619/global-engineering-group" target="_blank">
                <i class="fa-brands fa-amazon"></i>
            </a>
        </li>
        <li>
            <a href="https://podcasts.apple.com/mx/podcast/global-engineering-group/id1670720372" target="_blank">
                <i class="fa-solid fa-podcast"></i>
            </a>
        </li>
        <li class="google-podcasts">
            <a href="https://music.youtube.com/playlist?list=PLO1pdffn_uJq15LBTf9BNV6e4uOjIwPca&si=S58FOypLNvI6VxIY" target="_blank">
                <img class="img-fluid" src="<?php echo esc_url(
                    get_template_directory_uri()
                ); ?>/assets/images/logo-youtube-music.png" alt="YouTube Music" />
            </a>
        </li>
    </ul>
    <ul class="list-inline btn-lang">
        <li class="list-inline-item">
        <?php
        include get_theme_file_path("/includes/lang-switcher.php");
        if ($langs_array): ?>
            <?php foreach ($langs_array as $lang): ?>
            <a class="btn btn-primary me-2" href="<?php echo $lang["url"]; ?>">
                <?php echo $lang["name"]; ?>
            </a>
            <?php endforeach; ?>
        <?php endif;
        ?>
        </li>
    </ul>
    <ul class="list-inline btn-intranet">
        <li class="list-inline-item">
            <a class="btn btn-primary me-2" href="https://intraweb.grupogeg.com/">
                <?php esc_html_e("Intranet", "geg"); ?>
            </a>
        </li>
    </ul>
    <div id="backdrop"></div>
    <!-- div id="backdrop-buscar">
        <php
            include get_theme_file_path( '/includes/searchform.php' );
        >
    </div -->
    <div class="menu">
        <a id="cerrar-menu" href="javascript:void(0)">
            <i class="fas fa-times"></i>
        </a>
        <div class="menu-contenido">
            <a id="btn-logo" href="<?php echo esc_url(home_url()); ?>">
                <img class="logo img-fluid" src="<?php echo esc_url(
                    get_template_directory_uri()
                ); ?>/assets/images/logo.png" alt="Global Engineering Group">
            </a>
            <nav>
                <ul class="list-unstyled">
                <?php if ($currentlang == "en-US"): ?>
                    <li>
                        <a href="<?php echo get_page_link(
                            "685"
                        ); ?>"><?php echo get_the_title("685"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "690"
                        ); ?>"><?php echo get_the_title("690"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "695"
                        ); ?>"><?php echo get_the_title("695"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "701"
                        ); ?>"><?php echo get_the_title("701"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "710"
                        ); ?>"><?php echo get_the_title("710"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "704"
                        ); ?>"><?php echo get_the_title("704"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "707"
                        ); ?>"><?php echo get_the_title("707"); ?></a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo get_page_link(
                            "2"
                        ); ?>"><?php echo get_the_title("2"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "20"
                        ); ?>"><?php echo get_the_title("20"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "12"
                        ); ?>"><?php echo get_the_title("12"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "16"
                        ); ?>"><?php echo get_the_title("16"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "7"
                        ); ?>"><?php echo get_the_title("7"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "22"
                        ); ?>"><?php echo get_the_title("22"); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_page_link(
                            "18"
                        ); ?>"><?php echo get_the_title("18"); ?></a>
                    </li>
                <?php endif; ?>
                </ul>
            </nav>
        <?php if ($currentlang == "en-US"): ?>
            <a href="<?php echo get_page_link(
                "713"
            ); ?>" class="btn btn-primary" id="btn-contacto"><?php echo get_the_title(
    "713"
); ?></a>
        <?php else: ?>
            <a href="<?php echo get_page_link(
                "14"
            ); ?>" class="btn btn-primary" id="btn-contacto"><?php echo get_the_title(
    "14"
); ?></a>
        <?php endif; ?>
    <?php if (have_rows("datos_de_contacto", "option")):
        while (have_rows("datos_de_contacto", "option")):
            the_row(); ?>
        <?php if (have_rows("redes_sociales")):
            while (have_rows("redes_sociales")):
                the_row(); ?>
            <div class="social">
                <ul class="list-inline">
                <?php if (get_sub_field("linkedin")): ?>
                    <li class="list-inline-item">
                        <a href="<?php the_sub_field(
                            "linkedin"
                        ); ?>" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field("youtube")): ?>
                    <li class="list-inline-item">
                        <a href="<?php the_sub_field(
                            "youtube"
                        ); ?>" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field("facebook")): ?>
                    <li class="list-inline-item">
                        <a href="<?php the_sub_field(
                            "facebook"
                        ); ?>" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field("instagram")): ?>
                    <li class="list-inline-item">
                        <a href="<?php the_sub_field(
                            "instagram"
                        ); ?>" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field("twitter")): ?>
                    <li class="list-inline-item">
                        <a href="<?php the_sub_field(
                            "twitter"
                        ); ?>" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (get_sub_field("tiktok")): ?>
                    <li class="list-inline-item">
                        <a href="<?php the_sub_field(
                            "tiktok"
                        ); ?>" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
            <div class="social">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://open.spotify.com/show/3ywoYPFOUJYmZE8OAjHDhs" target="_blank">
                            <i class="fa-brands fa-spotify"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://music.amazon.com.mx/podcasts/65abd1cc-d794-45c2-9abb-a9560cbc2619/global-engineering-group" target="_blank">
                            <i class="fa-brands fa-amazon"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://podcasts.apple.com/mx/podcast/global-engineering-group/id1670720372" target="_blank">
                            <i class="fa-solid fa-podcast"></i>
                        </a>
                    </li>
                    <li class="list-inline-item google-podcasts">
                        <a href="https://podcasts.google.com/feed/aHR0cHM6Ly9hbmNob3IuZm0vcy9kOGIyM2I4NC9wb2RjYXN0L3Jzcw?sa=X&ved=0CAMQ4aUDahcKEwiYkovC7vz9AhUAAAAAHQAAAAAQAQ" target="_blank">
                            <img class="img-fluid" src="https://img.icons8.com/ios-filled/50/000000/google-podcasts.png" alt="Google Podcasts" />
                        </a>
                    </li>
                </ul>
            </div>
        <?php
            endwhile;
        endif; ?>
            <div id="contacto" class="mb-4">
                <ul class="list-unstyled">
                <?php if (have_rows("telefono_1")):
                    while (have_rows("telefono_1")):
                        the_row(); ?>
                    <li>
                        <i class="fas fa-phone"></i> <a href="tel:+52<?php the_sub_field(
                            "telefono_sin_formato"
                        ); ?>"><?php the_sub_field(
    "telefono_con_formato"
); ?></a>
                    </li>
                <?php
                    endwhile;
                endif; ?>
                <?php if (have_rows("telefono_2")):
                    while (have_rows("telefono_2")):
                        the_row(); ?>
                    <li>
                        <i class="fas fa-phone"></i> <a href="tel:+52<?php the_sub_field(
                            "telefono_sin_formato"
                        ); ?>"><?php the_sub_field(
    "telefono_con_formato"
); ?></a>
                    </li>
                <?php
                    endwhile;
                endif; ?>
                </ul>
            </div>
            <div id="buscador">
                <?php include get_theme_file_path(
                    "/includes/searchform.php"
                ); ?>
            </div>
        </div>
    <?php
        endwhile;
    endif; ?>
    </div>

    <header id="navbar" data-aos="fade-down" data-aos-delay="3000" data-aos-once="true">
        <nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-lg-2 my-auto ps-lg-5 ps-xl-6">
                        <a class="navbar-brand" href="<?php echo esc_url(
                            home_url()
                        ); ?>">
                            <img src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/logo.png" alt="Global Engineering Group" class="logo img-fluid" id="logo-navbar">
                        </a>
                    </div>
                    <div class="col-6 d-block d-lg-none my-auto text-end">
                        <ul class="list-inline">
                            <!-- li class="list-inline-item">
                                <a href="javascript:void(0)" id="buscar-movil" class="d-block d-lg-none">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </li -->
                            <li class="list-inline-item">
                                <a href="javascript:void(0)" id="mburger" class="d-block d-lg-none">
                                    <i class="fa-solid fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 offset-lg-1 my-auto d-none d-lg-block">
                        <div class="contenedor-navbar">
                        <?php if ($currentlang == "en-US"): ?>
                            <div class="row">
                                <div class="col">
                                    <ul class="navbar-top list-inline mb-2 mb-lg-0">
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "710"
                                            ); ?>"><?php echo get_the_title(
    "710"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "704"
                                            ); ?>"><?php echo get_the_title(
    "704"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "707"
                                            ); ?>"><?php echo get_the_title(
    "707"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "713"
                                            ); ?>"><?php echo get_the_title(
    "713"
); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="d-none d-lg-block">
                            <div class="row">
                                <div class="col">
                                    <ul class="navbar-bottom list-inline mb-2 mb-lg-0">
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "685"
                                            ); ?>"><?php echo get_the_title(
    "685"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "690"
                                            ); ?>"><?php echo get_the_title(
    "690"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "695"
                                            ); ?>"><?php echo get_the_title(
    "695"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "701"
                                            ); ?>"><?php echo get_the_title(
    "701"
); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <div class="col">
                                    <ul class="navbar-top list-inline mb-2 mb-lg-0">
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "7"
                                            ); ?>"><?php echo get_the_title(
    "7"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "22"
                                            ); ?>"><?php echo get_the_title(
    "22"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "18"
                                            ); ?>"><?php echo get_the_title(
    "18"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "14"
                                            ); ?>"><?php echo get_the_title(
    "14"
); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="d-none d-lg-block">
                            <div class="row">
                                <div class="col">
                                    <ul class="navbar-bottom list-inline mb-2 mb-lg-0">
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "2"
                                            ); ?>"><?php echo get_the_title(
    "2"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "20"
                                            ); ?>"><?php echo get_the_title(
    "20"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "12"
                                            ); ?>"><?php echo get_the_title(
    "12"
); ?></a>
                                        </li>
                                        <li class="nav-item list-inline-item">
                                            <a class="nav-link" href="<?php echo get_page_link(
                                                "16"
                                            ); ?>"><?php echo get_the_title(
    "16"
); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="row">
                            <div class="col-12">
                        <?php if (have_rows("datos_de_contacto", "option")):
                            while (have_rows("datos_de_contacto", "option")):
                                the_row(); ?>
                            <?php if (have_rows("redes_sociales")):
                                while (have_rows("redes_sociales")):
                                    the_row(); ?>
                                <ul class="social list-inline d-none d-lg-block">
                                <?php if (get_sub_field("linkedin")): ?>
                                    <li class="list-inline-item">
                                        <a href="<?php the_sub_field(
                                            "linkedin"
                                        ); ?>" target="_blank">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (get_sub_field("youtube")): ?>
                                    <li class="list-inline-item">
                                        <a href="<?php the_sub_field(
                                            "youtube"
                                        ); ?>" target="_blank">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (get_sub_field("facebook")): ?>
                                    <li class="list-inline-item">
                                        <a href="<?php the_sub_field(
                                            "facebook"
                                        ); ?>" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (get_sub_field("instagram")): ?>
                                    <li class="list-inline-item">
                                        <a href="<?php the_sub_field(
                                            "instagram"
                                        ); ?>" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (get_sub_field("twitter")): ?>
                                    <li class="list-inline-item">
                                        <a href="<?php the_sub_field(
                                            "twitter"
                                        ); ?>" target="_blank">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (get_sub_field("tiktok")): ?>
                                    <li class="list-inline-item">
                                        <a href="<?php the_sub_field(
                                            "tiktok"
                                        ); ?>" target="_blank">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                </ul>
                            <?php
                                endwhile;
                            endif; ?>
                        <?php
                            endwhile;
                        endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="social social-bottom list-inline d-none d-lg-block">
                                    <li class="list-inline-item">
                                        <?php include get_theme_file_path(
                                            "/includes/searchform.php"
                                        ); ?>
                                        <!-- a id="buscar-escritorio" href="javascript:void(0)">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<?php endif; ?>
