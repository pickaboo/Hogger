<?php

/**
 * Config-file for Hogger. Change settings here to affect installation.
 *
 */
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Hogger paths.
 *
 */
define('HOGGER_INSTALL_PATH', __DIR__ . '/..');
define('HOGGER_THEME_PATH', HOGGER_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(HOGGER_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();


/**
 * Create the Hogger variable.
 *
 */
$hogger = array();


/**
 * Site wide settings.
 *
 */
$hogger['lang'] = 'sv';
$hogger['title_append'] = ' | Hogger en webbtemplate';


$hogger['header'] = <<<EOD
<img class='sitelogo' src='img/hogger.png' alt='Hogger Logo'/>
<span class='sitetitle'>Hogger webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
 
$hogger['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Andreas Hultman (andreas.hultman@me.com) | <a href='https://github.com'>Hogger på GitHub [ToDo]</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



/**
 * Theme related settings.
 *
 */
$hogger['stylesheets'] = array('css/style.css'); //$hogger['stylesheet'] = 'css/style.css';
$hogger['favicon'] = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$hogger['modernizr'] = 'js/modernizr.js';
$hogger['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';  //$hogger['jquery'] = null; // To disable jQuery
$hogger['javascript_include'] = array(); //$hogger['javascript_include'] = array('js/main.js'); // To add extra javascript files


/**
 * Google analytics.
 *
 */
$hogger['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics



/**
 * The navbar
 *
 */
//$hogger['navbar'] = null; // To skip the navbar
$hogger['navbar'] = array(
    'class' => 'nb-plain',
    'items' => array(
        'hem' => array('text' => 'Hem', 'url' => 'me.php', 'title' => 'Min presentation om mig själv'),
        'redovisning' => array('text' => 'Redovisning', 'url' => 'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
        'tarning' => array('text' => 'Tärning', 'url' => 'Dice.php?action=0', 'title' => 'Spela Tärning'),
        'kallkod' => array('text' => 'Källkod', 'url' => 'source.php', 'title' => 'Se källkoden'),

    ),
    'callback_selected' => function($url) {
if (basename($_SERVER['SCRIPT_FILENAME']) == $url) {
    return true;
}
}
);


