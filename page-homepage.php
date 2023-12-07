<?php /* Template Name: vBrand Homepage */ ?>

<?php
	// autoload vbrandsync
	vbrandsync_getResponse('/');
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title><?php echo \App\Models\Setting::getThemeOption('site_name', 'vBrand Logitech Theme'); ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    .btn {
        border-radius: 0;
        padding: 12px 25px;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .btn-primary, .btn-secondary {
        background: rgb(47, 49, 50);
        border-color: rgb(47, 49, 50);
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/carousel.css" rel="stylesheet">

	<?php
		wp_head();
	?>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle d-none">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <header> 
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light px-4" style="z-index:1000000000;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo \App\Models\Setting::getThemeOption('site_logo'); ?>" width="150" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse py-3" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 justify-content-center" style="width:100%">
						<?php foreach (vbrand_theme_logitech_get_categories() as $category) { ?>
							<li class="nav-item me-3">
								<a class="nav-link text-uppercase fw-semibold" aria-current="page" href="<?php echo get_term_link( $category->cat_ID, 'product_cat' ); ?>">
									<?php echo $category->name; ?>
								</a>
							</li>
						<?php } ?>
                    </ul>
                    <div>
                        <div class="d-flex align-items-center">
                            <a href="<?php echo get_search_link(); ?>" class="text-dark me-3">
                                <span class="material-symbols-rounded">
                                    search
                                </span>
                            </a>
                            <a href="<?php echo wc_get_cart_url(); ?>" class="text-dark">
                                <span class="material-symbols-rounded">
                                    shopping_cart
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img"
                        src="<?php echo \App\Models\Setting::getThemeOption('slider_1_image'); ?>"
                    />
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1><?php echo \App\Models\Setting::getThemeOption('slider_1_title'); ?></h1>
                            <p class="opacity-75">
								<?php echo \App\Models\Setting::getThemeOption('slider_1_description'); ?></p>
                            <p><a class="btn btn-lg btn-light" href="<?php echo \App\Models\Setting::getThemeOption('slider_1_button_link', ''); ?>"><?php echo \App\Models\Setting::getThemeOption('slider_1_button_text'); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="<?php echo \App\Models\Setting::getThemeOption('slider_2_image'); ?>" />
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?php echo \App\Models\Setting::getThemeOption('slider_2_title'); ?></h1>
                            <p><?php echo \App\Models\Setting::getThemeOption('slider_2_description'); ?></p>
                            <p><a class="btn btn-lg btn-light" href="<?php echo \App\Models\Setting::getThemeOption('slider_2_button_link', ''); ?>"><?php echo \App\Models\Setting::getThemeOption('slider_2_button_text'); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="<?php echo \App\Models\Setting::getThemeOption('slider_3_image'); ?>" />
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1><?php echo \App\Models\Setting::getThemeOption('slider_3_title'); ?></h1>
                            <p><?php echo \App\Models\Setting::getThemeOption('slider_3_description'); ?></p>
                            <p><a class="btn btn-lg btn-light" href="<?php echo \App\Models\Setting::getThemeOption('slider_3_button_link'); ?>"><?php echo \App\Models\Setting::getThemeOption('slider_3_button_text'); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">

            <?php if (\App\Models\Setting::getThemeOption('home_articles_block_show')) { ?>
                <!-- Three columns of text below the carousel -->
                <div class="row">

                    <?php
                        $numOfPosts = \App\Models\Setting::getThemeOption('home_articles_block_number');
                        $sort = \App\Models\Setting::getThemeOption('home_articles_block_sort');

                        $args = array( 'numberposts' => $numOfPosts );
                        $args['post_status'] = 'publish';

                        if ($sort == 'newest') {
                            $args['order'] = 'DESC';
                            $args['orderby'] = 'post_date';
                        } else if ($sort == 'oldest') {
                            $args['order'] = 'ASC';
                            $args['orderby'] = 'post_date';
                        } else {
                            $args['order'] = 'DESC';
                            $args['orderby'] = 'post_date';
                        }

                        
                        $postslist = get_posts( $args );
                    ?>
                    

                    <?php foreach ($postslist as $post) {
                        $content = $post->post_content;
                        $content = strip_tags($content);
                        $shortDescription = substr($content, 0, 100);
                        $thumbnail_url = get_the_post_thumbnail_url($post->ID, 'medium');
                    ?>
                        <div class="col-lg-<?php echo 12/$numOfPosts; ?>">
                            <?php if ($thumbnail_url) { ?> 
                                <img class="rounded-circle" src="<?php echo $thumbnail_url; ?>" width="140" height="140" alt="">
                            <?php } else { ?>
                                <img class="rounded-circle" src="<?php echo get_template_directory_uri(); ?>/image/placeholder.svg" width="140" height="140" alt="">
                            <?php } ?>
                            <h2 class="fw-normal mt-3"><?php echo $post->post_title; ?></h2>
                            <p><?php echo $shortDescription; ?></p>
                            <p>
                                <a class="btn btn-secondary" href="<?php echo get_permalink($post->ID); ?>">
                                    <?php echo \App\Models\Setting::getThemeOption('home_articles_block_view_button_text'); ?> &raquo;
                                </a>
                            </p>
                        </div><!-- /.col-lg-4 -->
                    <?php } ?>
                </div><!-- /.row -->

                <hr class="featurette-divider">
            <?php } ?>

            <?php if (\App\Models\Setting::getThemeOption('home_feature_block_show')) { ?>
                <!-- START THE FEATURETTES -->

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo \App\Models\Setting::getThemeOption('home_feature_block_1_title'); ?></h2>
                        <p class="lead mt-3"><?php echo \App\Models\Setting::getThemeOption('home_feature_block_1_description'); ?></p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" src="<?php echo \App\Models\Setting::getThemeOption('home_feature_block_1_image'); ?>" width="500px" alt="">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1"><?php echo \App\Models\Setting::getThemeOption('home_feature_block_2_title'); ?></h2>
                        <p class="lead mt-3"><?php echo \App\Models\Setting::getThemeOption('home_feature_block_2_description'); ?></p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto" src="<?php echo \App\Models\Setting::getThemeOption('home_feature_block_2_image'); ?>" width="500px" alt="">
                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            <?php } ?>

            <?php if (\App\Models\Setting::getThemeOption('products_module_show')) { ?>
                <section>
                    <h2 class="text-center"><?php echo \App\Models\Setting::getThemeOption('products_module_title'); ?></h2>
                    <div class="pb-5 pt-4">
                        <div class="row">
                        <?php
                                $count = \App\Models\Setting::getThemeOption('products_module_number');
                                $case = \App\Models\Setting::getThemeOption('products_module_type');

                                switch ($case) {
                                    case "hot":
                                        $args = array(
                                            'post_type'      => 'product',
                                            'posts_per_page' => $count,
                                            'meta_query'     => array(
                                                'relation' => 'OR',
                                                array(
                                                    'key'   => 'hot_product', // Change this to your hot product custom field
                                                    'value' => '1',           // Assuming '1' means it's marked as hot
                                                )
                                            ),
                                        ); 
                                        break;                        
                                    case "feature":
                                        $args = array(
                                            'post_type'      => 'product',
                                            'posts_per_page' => $count,
                                            'meta_query'     => array(
                                                'relation' => 'OR' ,
                                                array(
                                                    'key'   => '_featured',   // WooCommerce uses '_featured' for featured products
                                                    'value' => 'yes',
                                                ),
                                            ),
                                        );
                                        break;
                                    case "new":
                                        $args = array(
                                            'post_type'      => 'product',
                                            'posts_per_page' => $count,
                                            'meta_query'     => array(
                                                'relation' => 'OR',
                                                array(
                                                    'key'   => 'new_product', // Change this to your new product custom field
                                                    'value' => '1',           // Assuming '1' means it's marked as new
                                                ), 
                                            ),
                                        );
                                    default:
                                        $args = array(
                                            'post_type'      => 'product',
                                            'posts_per_page' => $count,
                                        );
                                } 
                                
                                $products = new WP_Query($args);
                                if ($products->have_posts()){ 
                                    while ($products->have_posts()){
                                        $products->the_post();
                                        // Ensure visibility.
                                        if ( empty( $product ) || ! $product->is_visible() ) {
                                            return;
                                        }
                                        ?>
                                        <div class="col-lg-<?php echo 12/$count; ?>">
                                            <div class="card d-block">
                                                <div class="d-flex justify-content-between p-3">
                                                    <p class="lead mb-0 fw-semibold"><?=the_title()?></p>
                                                    <!-- <div
                                                    class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                                    style="width: 35px; height: 35px;">
                                                    <p class="text-white mb-0 small">x4</p>
                                                    </div> -->
                                                </div>
                                                <?php if (wp_get_attachment_image_src(get_the_ID())) { ?>
                                                    <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'card-img-top')); ?>
                                                <?php } else { ?>
                                                    <img src="<?=get_template_directory_uri()?>/image/empty_box.png" class="card-img-top">
                                                <?php } ?>
                                                <div class="card-body">
                                                    <!-- <div class="d-flex justify-content-between">
                                                    <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                                    <p class="small text-danger"><s>$1099</s></p>
                                                    </div> -->

                                                    <div class="d-flex justify-content-between mb-3">
                                                        <h5 class="mb-0">Price</h5>
                                                        <h5 class="text-dark mb-0"><?=wc_price(get_post_meta(get_the_ID(), '_price', true))?></h5>
                                                    </div>

                                                    <div class="text-center">
                                                        <a href="<?=esc_url(get_permalink())?>" class="btn btn-light">Xem chi tiết</a>
                                                    </div>

                                                    <div class="d-flex justify-content-between mb-2 d-none">
                                                        <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                                                        <div class="ms-auto text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start Column 2 -->
                                        <div class="d-none col-lg-<?php echo 12/($count+1); ?>">
                                            <a class="product-item" href="<?=esc_url(get_permalink())?>">
                                                <?php if (wp_get_attachment_image_src(get_the_ID())) { ?>
                                                    <?php the_post_thumbnail('single-post-thumbnail', array('class' => 'img-fluid product-thumbnail')); ?>
                                                <?php } else { ?>
                                                    <img src="<?=get_template_directory_uri()?>/images/empty_box.png" class="img-fluid product-thumbnail">
                                                <?php } ?>
                                                
                                                <h3 class="product-title"><?=the_title()?></h3>
                                                <strong class="product-price"><?=wc_price(get_post_meta(get_the_ID(), '_price', true))?></strong>

                                                <span class="icon-cross">
                                                    <img src="<?=get_template_directory_uri()?>/images/cross.svg" class="img-fluid">
                                                </span>
                                            </a>
                                        </div> 
                                        <!-- End Column 2 --> 
                                    <?php	
                                    }
                                }
                                wp_reset_postdata(); // Đặt lại truy vấn sản phẩm
                            ?>
                        </div>
                    </div>
                </section>

                <hr class="featurette-divider">

            <?php } ?>

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container mt-5">
            <p class="float-end"><a href="#"><?php echo \App\Models\Setting::getThemeOption('back_to_top_text'); ?></a></p>
            <p><?php echo \App\Models\Setting::getThemeOption('copyright_line'); ?></p>
        </footer>
    </main>
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

	<?php
		wp_footer();
	?>

</body>

</html>