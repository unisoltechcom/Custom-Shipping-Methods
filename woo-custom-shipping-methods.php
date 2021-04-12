<?php
/*
 * Plugin Name:  Custom Shipping Methods for WooCommerce
 * Version: 1
 * Plugin URI: http://unisoltech.com/
 * Description: Custom shipping methods for WooCommerce
 * Author: unisoltech
 * Requires at least: 4.0
 * Tested up to: 5.4.1
 *
 * Text Domain: woocommerce-custom-shipping
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author web-data.io
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-woocommerce-custom-shipping-functions.php' );
require_once( 'includes/class-woocommerce-custom-shipping-settings-table.php' );
require_once( 'includes/class-woocommerce-custom-shipping-cart-items.php' );
require_once( 'includes/class-woocommerce-custom-shipping-method-constructor.php' );