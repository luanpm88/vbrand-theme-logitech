<?php

return [
    // SITE NAME
    [
        'type' => 'text',
        'name' => 'site_name',
        'label' => 'Tên webiste',
        'default' => 'vBrand Logitech Theme',
    ],

    // SIDE LOGO
    [
        'type' => 'image',
        'name' => 'site_logo',
        'label' => 'Site logo',
        'default' => 'https://upload.wikimedia.org/wikipedia/commons/1/17/Logitech_logo.svg',
    ],

    // SLIDER BLOCK
    // show
    [
        'type' => 'boolean',
        'name' => 'show_home_slider',
        'label' => 'Show home slider',
        'default' => true,
    ],
    // slider #1
    [
        'type' => 'image',
        'name' => 'slider_1_image',
        'label' => 'Slider 1: Image',
        'default' => get_template_directory_uri() . '/image/bg-design-desktop.jpg',
    ],
    [
        'type' => 'text',
        'name' => 'slider_1_title',
        'label' => 'Slider 1: Title',
        'default' => 'Example headline.',
    ],
    [
        'type' => 'textarea',
        'name' => 'slider_1_description',
        'label' => 'Slider 1: Description',
        'default' => 'Some representative placeholder content for the first slide of thecarousel.',
    ],
    [
        'type' => 'text',
        'name' => 'slider_1_button_link',
        'label' => 'Slider 1: Button Link',
        'default' => '',
    ],
    [
        'type' => 'text',
        'name' => 'slider_1_button_text',
        'label' => 'Slider 1: Button Text',
        'default' => 'Sign up today',
    ],
    // slider #2
    [
        'type' => 'image',
        'name' => 'slider_2_image',
        'label' => 'Slider 2: Image',
        'default' => get_template_directory_uri() . '/image/future-positive-challenge-desktop.jpg',
    ],
    [
        'type' => 'text',
        'name' => 'slider_2_title',
        'label' => 'Slider 2: Title',
        'default' => 'Another example headline.',
    ],
    [
        'type' => 'textarea',
        'name' => 'slider_2_description',
        'label' => 'Slider 2: Description',
        'default' => 'Some representative placeholder content for the second slide of the carousel.',
    ],
    [
        'type' => 'text',
        'name' => 'slider_2_button_link',
        'label' => 'Slider 2: Button Link',
        'default' => '',
    ],
    [
        'type' => 'text',
        'name' => 'slider_2_button_text',
        'label' => 'Slider 2: Button Text',
        'default' => 'Learn more',
    ],
    // slider #3
    [
        'type' => 'image',
        'name' => 'slider_3_image',
        'label' => 'Slider 3: Image',
        'default' => get_template_directory_uri() . '/image/climate-positive-desk.png',
    ],
    [
        'type' => 'text',
        'name' => 'slider_3_title',
        'label' => 'Slider 3: Title',
        'default' => 'One more for good measure.',
    ],
    [
        'type' => 'textarea',
        'name' => 'slider_3_description',
        'label' => 'Slider 3: Description',
        'default' => 'Some representative placeholder content for the third slide of this carousel.',
    ],
    [
        'type' => 'text',
        'name' => 'slider_3_button_link',
        'label' => 'Slider 3: Button Link',
        'default' => '',
    ],
    [
        'type' => 'text',
        'name' => 'slider_3_button_text',
        'label' => 'Slider 3: Button Text',
        'default' => 'Browse gallery',
    ],

    // PRODUCTS MODULE
    [
        'type' => 'boolean',
        'name' => 'products_module_show',
        'label' => 'Show Products Module',
        'default' => true,
    ],
    [
        'type' => 'text',
        'name' => 'products_module_title',
        'label' => 'Products Module Title',
        'default' => 'SẢN PHẨM MỚI',
    ],
    [
        'type' => 'textarea',
        'name' => 'products_module_description',
        'label' => 'Products Module Description',
        'default' => 'Mẫu sản phẩm mới nhất được chúng tôi cập nhật hàng ngày',
    ],
    [
        'type' => 'select',
        'name' => 'products_module_type',
        'label' => 'Products Module: Type',
        'default' => 'all',
        'options' => [
            ['value' => 'all', 'text' => 'Mặc định'],
            ['value' => 'hot', 'text' => 'Hot'],
            ['value' => 'feature', 'text' => 'Feature'],
            ['value' => 'new', 'text' => 'New'],
        ],
    ],
    [
        'type' => 'select',
        'name' => 'products_module_number',
        'label' => 'Products Module: Number of Products',
        'default' => 4,
        'options' => [
            ['value' => 3, 'text' => 3],
            ['value' => 4, 'text' => 4],
            ['value' => 6, 'text' => 6],
        ],
    ],

    // ARTICLES BLOCK
    [
        'type' => 'boolean',
        'name' => 'home_articles_block_show',
        'label' => 'Home Articles Block: Show',
        'default' => true,
    ],
    [
        'type' => 'select',
        'name' => 'home_articles_block_number',
        'label' => 'Home Articles Block: Number of Articles',
        'default' => 3,
        'options' => [
            ['value' => 3, 'text' => 3],
            ['value' => 4, 'text' => 4],
            ['value' => 6, 'text' => 6],
        ],
    ],
    [
        'type' => 'select',
        'name' => 'home_articles_block_sort',
        'label' => 'Home Articles Block: Sort',
        'default' => 'newest',
        'options' => [
            ['value' => 'newest', 'text' => 'Newest'],
            ['value' => 'oldest', 'text' => 'Oldest'],
        ],
    ],
    [
        'type' => 'text',
        'name' => 'home_articles_block_view_button_text',
        'label' => 'Home Articles Block: View button text',
        'default' => 'View details',
    ],

    // FEATURES BLOCK
    [
        'type' => 'boolean',
        'name' => 'home_feature_block_show',
        'label' => 'Home Feature Block: Show',
        'default' => true,
    ],
    [
        'type' => 'image',
        'name' => 'home_feature_block_1_image',
        'label' => 'Home Feature Block 1: Image',
        'default' => get_template_directory_uri() . '/image/zone-wireless-2-hpb-feature-2.webp',
    ],
    [
        'type' => 'text',
        'name' => 'home_feature_block_1_title',
        'label' => 'Home Feature Block 1: Title',
        'default' => 'First featurette heading. <span
            class="text-body-secondary">It’ll blow your mind.</span>',
    ],
    [
        'type' => 'textarea',
        'name' => 'home_feature_block_1_description',
        'label' => 'Home Feature Block 1: Description',
        'default' => 'Some great placeholder content for the first featurette here. Imagine some exciting
            prose here.',
    ],
    [
        'type' => 'image',
        'name' => 'home_feature_block_2_image',
        'label' => 'Home Feature Block 2: Image',
        'default' => get_template_directory_uri() . '/image//brio-100-hpb-feature.webp',
    ],
    [
        'type' => 'text',
        'name' => 'home_feature_block_2_title',
        'label' => 'Home Feature Block 2: Title',
        'default' => 'Oh yeah, it’s that good. <span
            class="text-body-secondary">See for yourself.</span>',
    ],
    [
        'type' => 'textarea',
        'name' => 'home_feature_block_2_description',
        'label' => 'Home Feature Block 2: Description',
        'default' => 'Another featurette? Of course. More placeholder content here to give you an idea of
            how this layout would work with some actual real-world content in place.',
    ],

    // FOOTER
    [
        'type' => 'textarea',
        'name' => 'copyright_line',
        'label' => 'Copyright Line',
        'default' => '© 2017–2023 Company, Inc. · <a href="#" class="fw-semibold">Privacy</a> · <a href="#" class="fw-semibold">Terms</a>',
    ],
    
    // BACK TO TOP TEXT
    [
        'type' => 'textarea',
        'name' => 'back_to_top_text',
        'label' => 'Go to top text',
        'default' => 'Back to Top',
    ],
];