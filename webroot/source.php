<?php 
/**
 * This is a Hogger pagecontroller.
 *
 */
// Include the essential config-file which also creates the $hogger variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$hogger['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


$hogger['header'] = <<<EOD
<img class='sitelogo' src='img/hogger.png' alt='Hogger Logo'/>
<span class='sitetitle'>Hogger webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;


// Do it and store it all in variables in the Hogger container.
$hogger['title'] = "Visa källkod";

$hogger['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


$hogger['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Andreas Hultman (andreas.hultman@me.com) | <a href='https://github.com'>Hogger på GitHub [ToDo]</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Hogger.
include(HOGGER_THEME_PATH);