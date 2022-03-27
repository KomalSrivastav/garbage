<?php
/**
 * Plugin Name: Portfolio
 * Plugin URI: http://demo.radiustheme.com/wordpress/plugins/tlp-portfolio/
 * Description: Portfolio is Fully Responsive and Mobile Friendly portfolio for WordPress to display your portfolio work in Grid and Isotope Views.
 * Author: RadiusTheme
 * Version: 2.8.6
 * Author URI: https://radiustheme.com
 * Tag: portfolio, portfolio plugin,filterable portfolio, portfolio gallery, portfolio display, portfolio slider, responsive portfolio, portfolio showcase, wp portfolio
 * Text Domain: tlp-portfolio
 * Domain Path: /languages
 */

define('TLP_PORTFOLIO_VERSION', '2.8.6' );
define('TLP_PORTFOLIO_PLUGIN_PATH', dirname(__FILE__));
define('TLP_PORTFOLIO_PLUGIN_ACTIVE_FILE_NAME', plugin_basename(__FILE__));
define('TLP_PORTFOLIO_PLUGIN_URL', plugins_url('', __FILE__));
define('TLP_PORTFOLIO_LANGUAGE_PATH', dirname(plugin_basename(__FILE__)) . '/languages');

/**
 * Check Pro Version.
 */
if( ! class_exists( 'TLPpPro' ) ){
	require('lib/init.php');
}
