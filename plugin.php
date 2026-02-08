<?php
/*
Plugin Name: Tucano
Description: Edit config.php and plugin.php to change the description.
Version: 1.0.0
Author: Unknow
*/

use Ofernandoavila\TucanoCore\Core\Core;

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

register_activation_hook(__FILE__, fn() => Core::install(__DIR__));
register_deactivation_hook(__FILE__, fn() => Core::uninstall(__DIR__));

add_action('init', function () {
    new Core(__DIR__)->init();
}, 9999);
