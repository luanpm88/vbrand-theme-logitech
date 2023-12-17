
<?php /* Template Name: vBrand Logitech Homepage */ ?>

<?php include 'header.php'; ?>
        
<?php if (\App\Models\Setting::getThemeOption('show_home_slider')) { ?>
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach (\App\Models\Setting::getThemeOption('home_sliders') as $key => $slider) {
            ?>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?= $key ?>" <?= ($key == 0) ? 'class="active"' : '' ?>
                    aria-current="true" aria-label="<?php echo $slider['title'] ?? ''; ?>"></button>
            <?php } ?>
        </div>
        <div class="carousel-inner">
            <?php foreach (\App\Models\Setting::getThemeOption('home_sliders') as $key => $slider) {
            ?>
                <div class="carousel-item <?= ($key == 0) ? 'active' : '' ?>">
                    <img class="bd-placeholder-img"
                        src="<?php echo $slider['image'] ?? ''; ?>"
                    />
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1><?php echo $slider['title'] ?? ''; ?></h1>
                            <p class="opacity-75">
                                <?php echo $slider['description'] ?? ''; ?>
                            </p>
                            <p><a class="btn btn-lg btn-light" href="<?php echo $slider['button_link'] ?? ''; ?>"><?php echo $slider['button_text'] ?? ''; ?></a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
<?php } ?>


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
        <?php foreach (\App\Models\Setting::getThemeOption('articles_block') as $key => $article) {
        ?>
            <div class="row featurette">
                <div class="col-md-7 <?= $key%2 == 1 ? 'order-md-2' : '' ?>">
                    <h2 class="featurette-heading fw-normal lh-1"><?php echo $article['title'] ?? ''; ?></h2>
                    <p class="lead mt-3"><?php echo $article['description'] ?? ''; ?></p>
                </div>
                <div class="col-md-5 <?= $key%2 == 1 ? 'order-md-1' : '' ?>">
                    <img class="featurette-image img-fluid mx-auto" src="<?php echo $article['image'] ?? ''; ?>" width="500px" alt="">
                </div>
            </div>
            <hr class="featurette-divider">
        <?php } ?>

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
                                        </div><?php
                                            $images = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                                        ?>
                                        <?php if (is_array($images)) { ?>
                                            <img src="<?=$images[0]?>" class="card-img-top">
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
                                            <img src="<?=get_template_directory_uri()?>/image/empty_box.png" class="img-fluid product-thumbnail">
                                        <?php } ?>
                                        
                                        <h3 class="product-title"><?=the_title()?></h3>
                                        <strong class="product-price"><?=wc_price(get_post_meta(get_the_ID(), '_price', true))?></strong>

                                        <span class="icon-cross">
                                            <img src="<?=get_template_directory_uri()?>/image/cross.svg" class="img-fluid">
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

<?php include 'footer.php'; ?>