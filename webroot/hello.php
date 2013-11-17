<?php 
/**
 * This is a Hogger pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Hogger variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Hogger container.
$hogger['title'] = "Hello World";
 
$hogger['header'] = <<<EOD
<img class='sitelogo' src='img/hogger.png' alt='Hogger Logo'/>
<span class='sitetitle'>Hogger webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 



$hogger['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Hogger ser ut och fungerar.</p>
EOD;
 
$hogger['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Andreas Hultman (andreas.hultman@me.com) | <a href='https://github.com'>Hogger på GitHub [ToDo]</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Hogger.
include(HOGGER_THEME_PATH);

// Add js/main.js for inklusion
$hogger['javascript_include'][] = 'js/main.js';
$hogger['javascript_include'][] = 'js/other.js';