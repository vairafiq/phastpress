<?php
/*
Plugin Name: Express
Description: Express automatically optimizes your site for the best possible Google PageSpeed Insights score.
Version: 99.0
Author: Francesco
License: AGPLv3
*/

define('PHASTPRESS_VERSION', '2.18');
define('PHASTPRESS_PLUGIN_FILE', __FILE__);

if (version_compare(PHP_VERSION, '7.3', '<')) {
    require dirname(__FILE__) . '/low-php-version.php';
} else {
    require dirname(__FILE__) . '/bootstrap.php';
}
