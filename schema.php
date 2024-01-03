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

    // Menus
    [
        'type' => 'list',
        'name' => 'menus',
        'label' => 'Menus',
        'max' => 10,
        'default' => [
            [
                'show' => true,
                'title' => 'Trang chủ',
                'type' => 'page-homepage.php',
            ],
            [
                'show' => true,
                'title' => 'About Us',
                'type' => 'page-aboutus.php',
            ],
            // [
            //     'show' => true,
            //     'title' => 'Gian Hàng',
            //     'type' => 'Logitech - Shop',
            // ],
            // [
            //     'show' => true,
            //     'title' => 'Tin tức',
            //     'type' => 'Logitech - News',
            // ],
            // [
            //     'show' => true,
            //     'title' => 'Contact Us',
            //     'type' => 'Logitech - Contact US',
            // ],
        ],
        'schema' => [
            // show
            [
                'type' => 'boolean',
                'name' => 'show',
                'label' => 'Hiển thị',
                'default' => true,
            ],
            [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Tên menu',
                'default' => '',
            ],
            [
                'type' => 'select',
                'name' => 'type',
                'label' => 'Chọn Loại Menu',
                'default' => '',
                'options' => [
                    ['value' => 'page-homepage.php', 'text' => 'Trang chủ'],
                    ['value' => 'Logitech - About Us', 'text' => 'Giới thiệu'],
                    ['value' => 'Logitech - Shop', 'text' => 'Gian hàng'],
                    ['value' => 'Logitech - News', 'text' => 'Tin tức'],
                    ['value' => 'Logitech - Contact US', 'text' => 'Liên hệ'],
                ],
            ],
        
        ],
    ],

    // SLIDER BLOCK
    // show
    [
        'type' => 'boolean',
        'name' => 'show_home_slider',
        'label' => 'Show home slider',
        'default' => true,
    ],
    // sliders
    [
        'type' => 'list',
        'name' => 'home_sliders',
        'label' => 'Home Sliders',
        'max' => 10,
        'default' => [
            [
                'image' => get_template_directory_uri() . '/image/future-positive-challenge-desktop.jpg',
                'title' => 'Example headline.',
                'button_text' => 'Sign up today',
                'description' => 'Some representative placeholder content for the first slide of thecarousel.',
            ],
            [
                'image' => get_template_directory_uri() . '/image/bg-design-desktop.jpg',
                'title' => 'Another example headline.',
                'button_text' => 'Learn more',
                'description' => 'Some representative placeholder content for the first slide of thecarousel.',
            ],
            [
                'image' => get_template_directory_uri() . '/image/climate-positive-desk.png',
                'title' => 'One more for good measure.',
                'button_text' => 'Learn more',
                'description' => 'Some representative placeholder content for the third slide of this carousel.',
            ],
        ],
        'schema' => [
            [
                'type' => 'image',
                'name' => 'image',
                'label' => 'Slider Image',
                'default' => get_template_directory_uri() . '/image/bg-design-desktop.jpg',
            ],
            [
                'type' => 'text',
                'name' => 'title',
                'label' => 'Title',
                'default' => 'Example headline.',
            ],
            [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Description',
                'default' => 'Some representative placeholder content for the first slide of thecarousel.',
            ],
            [
                'type' => 'text',
                'name' => 'button_link',
                'label' => 'Button Link',
                'default' => '',
            ],
            [
                'type' => 'text',
                'name' => 'button_text',
                'label' => 'Button Text',
                'default' => 'Sign up today',
            ],
        ],
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

    // Homepage Products Module
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
        'type' => 'list',
        'name' => 'articles_block',
        'label' => 'Home Articles Block',
        'max' => 10,
        'default' => [
            [
                'image' => get_template_directory_uri() . '/image/zone-wireless-2-hpb-feature-2.webp',
                'title' => 'First featurette heading. <span
                    class="text-body-secondary">It’ll blow your mind.</span>',
                'description' => 'Some great placeholder content for the first featurette here. Imagine some exciting
                    prose here.',
            ],
            [
                'image' => get_template_directory_uri() . '/image//brio-100-hpb-feature.webp',
                'title' => 'Oh yeah, it’s that good. <span
                    class="text-body-secondary">See for yourself.</span>',
                'description' => 'Another featurette? Of course. More placeholder content here to give you an idea of
                    how this layout would work with some actual real-world content in place.',
            ],
        ],
        'schema' => [
            [
                'type' => 'image',
                'name' => 'image',
                'label' => 'Image',
                'default' => get_template_directory_uri() . '/image/zone-wireless-2-hpb-feature-2.webp',
            ],
            [
                'type' => 'textarea',
                'name' => 'title',
                'label' => 'Title',
                'default' => 'First featurette heading. <span
                    class="text-body-secondary">It’ll blow your mind.</span>',
            ],
            [
                'type' => 'textarea',
                'name' => 'description',
                'label' => 'Description',
                'default' => 'Some great placeholder content for the first featurette here. Imagine some exciting
                    prose here.',
            ],
        ],
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
        'type' => 'text',
        'name' => 'back_to_top_text',
        'label' => 'Go to top text',
        'default' => 'Back to Top',
    ],
    [
        'type' => 'boolean',
        'name' => 'about_us_show',
        'label' => 'Show About Us Module',
        'default' => true,
    ],
    [
        'type' => 'text',
        'name' => 'about_us_title',
        'label' => 'About Us title',
        'default' => 'Tiêu đề mặc định của trang about us ',
    ],
    [
        'type' => 'textarea',
        'name' => 'about_us_content',
        'label' => 'About Us Content',
        'default' => 'Nội dung mặc định của trang about us ',
    ],
];

?> 