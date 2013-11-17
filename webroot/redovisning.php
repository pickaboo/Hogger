<?php 
/**
 * This is a Hogger pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Hogger variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Hogger container.
$hogger['title'] = "Redovisning";
 
$hogger['header'] = <<<EOD
<img class='sitelogo' src='img/hogger.png' alt='Hogger Logo'/>
<span class='sitetitle'>Hogger webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 



$hogger['main'] = <<<EOD
<h1>Redovisning oophp</h1>
<h3>kmom 1</h3>        
<p>
Jag sitter med en Mac och NetBeans. För ftp kör jag Filezilla. <br>
Namnet på min template blev Hogger.<br><br>        
Detta var en mäktig inledning till kursen. 
Den första delen, 20 steg för att komma igång med PHP, gick jag igenom översiktligt och provade olika delar som jag kände var intressanta och som var nya för mig. Kommer säkert att återvända dit igen även om jag tyckte att det flöt på ganska bra. 
Andra delen var MYCKET. Långa stunder hade jag absolut ingen aning om vad jag gjorde eller varför. Fick läsa materialet om och om igen innan jag började ana vad jag egentligen höll på med. När det var som mest rörigt så skissade upp jag de olika filerna med papper, penna och ritade pilar mellan för att kunna få en lite bättre överblick av det hela. Då klarnade det lite. Hur som helst. Eftersom denna strukturen ska utgöra grunden i kommande moment så ville jag ha den så stabil som möjligt. Jag vill inte sitta och leta buggar och inte veta om felet kanske ligger i min template. Så jag copy/paste det mesta och lyckades sy ihop det till sist. 
<br>Menyn klarade jag relativt enkelt. Tog bara lite tid innan jag förstod var jag skulle lägga in allt men det löste sig till sist. 
Source blev en ny modul och det gick ganska smidigt att lägga in. 
Jag gjorde inte GitHub-uppgiften nu för jag ville inte röra till det för mycket - men jag kommer att göra den senare. 
 
   
   
   
   </p>
EOD;
 
$hogger['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Andreas Hultman (andreas.hultman@me.com) | <a href='https://github.com'>Hogger på GitHub [ToDo]</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Hogger.
include(HOGGER_THEME_PATH);

// Add js/main.js for inklusion
$hogger['javascript_include'][] = 'js/main.js';
$hogger['javascript_include'][] = 'js/other.js';
