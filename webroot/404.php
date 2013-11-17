<?php 
/**
 * This is a Hogger pagecontroller.
 *
 */
// Include the essential config-file which also creates the $hogger variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Hogger container.
$hogger['title'] = "404";
$hogger['header'] = "";
$hogger['main'] = "This is a Hogger 404. Document is not here.";
$hogger['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Hogger.
include(HOGGER_THEME_PATH);