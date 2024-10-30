<?php
/*
Plugin Name: Lisette Cost Calculator
Description: Calculator of the order cost, when the total amount depends on the user's choice of components
Author: Sergey Morozov
License: MIT
Version: 1.2
Text Domain: lcc
Domain Path: /languages
*/
 
/**
 * Plugin version 1.2
 * 
 * @var string
 */
define('СOST_CALCULATOR_VERSION', '1.2');
 
/**
 * Path to the plugin directory
 * 
 * @var string
 */
define('СOSTCALCULATOR__DOCUMENT_ROOT', __DIR__);

require_once 'LisetteCCApplication.php';
require_once 'Sum.php';

/*
 * Do somethig once, when the plugin is activated.
 */
function cost_calculator_activate() {
}
register_activation_hook(__FILE__, 'cost_calculator_activate');

try {
    $application = new LisetteCCApplication(['name' => 'questionnaire']);
} catch (Exception $e) {
    echo $e->getMessage();
}
