<?php

/**
 * This is a Hogger pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Hogger variable with its defaults.
include(__DIR__ . '/config.php');


// Do it and store it all in variables in the Hogger container.
$hogger['title'] = "Min Me-Sida";

$hogger['header'] = <<<EOD
<img class='sitelogo' src='img/hogger.png' alt='Hogger Logo'/>
<span class='sitetitle'>Hogger webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;




$hogger['main'] = <<<EOD
<h1>Om mig</h1>
        <img class='ahImage' src='img/ah2.jpg' alt='Hogger Logo' style='float: left; margin-right: 20px; '/>
<p>Jag heter Andreas Hultman och jag läser distanskurser här på BTH. 
   Jag läser även de grundläggande kurserna i Datateknik och i Datavetenskap på Mittuniversitetet. Jag går också en kurs i C++.  
   Min tanke är att jag ska lära mig att programmera så pass att jag kan utveckla det jag vill, på egen hand. 
   Jag räknar med att studera i ca 3 år. Jag har tidigare haft IT-relaterade arbeten men då arbetat med marknadssidan. 
   Det har jag gjort i främst mindre företag som jag varit med i från starten. 
   Det har till största delen handlat om tjänster för musikindustrin och företag inom mediaindustrin men också andra produkter för desktop och mobiler. 
   På fritiden tycker jag om att resa och ibland, dessvärre alldeles för sällan, fixar jag med en gammal segelbåt. 
   Jag bor i Malmö med min familj.</p>
EOD;

$hogger['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Andreas Hultman (andreas.hultman@me.com) | <a href='https://github.com'>Hogger på GitHub [ToDo]</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Hogger.
include(HOGGER_THEME_PATH);

// Add js/main.js for inklusion
$hogger['javascript_include'][] = 'js/main.js';
$hogger['javascript_include'][] = 'js/other.js';

