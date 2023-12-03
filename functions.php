<?php

function vbrand_theme_logitech_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'vbrand_theme_logitech_woocommerce_support' );
