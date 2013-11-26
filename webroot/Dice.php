<?php 
/**
 * This is a Hogger pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Hogger variable with its defaults.
include(__DIR__.'/config.php'); 

include (HOGGER_INSTALL_PATH.'/src/CDice.php');
include (HOGGER_INSTALL_PATH.'/src/CdiceKast.php');// ********************************************************************************
include (HOGGER_INSTALL_PATH.'/src/CdiceRound.php');
$sven = new diceClass();
$benny = $sven->tarning();
$hogger['title'] = "Tärning 100";
$hogger['main'] ="

<h1>Kasta Tärning</h1>

<p>{$benny}</p>        
";

// Finally, leave it all to the rendering phase of Hogger.
include(HOGGER_THEME_PATH);

// Add js/main.js for inklusion
$hogger['javascript_include'][] = 'js/main.js';
$hogger['javascript_include'][] = 'js/other.js';



