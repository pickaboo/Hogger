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
        
<h3>kmom 2</h3>        
<p>        
Jag har tidigare kommit i kontakt med objektsorienterad programmering. 
    Dels i Java och en del C++. 
        Jag löste uppgiften Tärning genom att jag la själva spelet i en klass och två mindre klasser för den aktuella rundan och en för tärningskastet. 
            Olika funktioner ändrar värden i $-sessions beroende på händelser skickas via länken.  
Jag fick ihop något som fungerade utan några större problem.  
    .  De främsta svårigheterna är att jag inte är så bekväm med syntaxen. 
        Enkelt att fastna i mer triviala problem. Ibland tycker jag också att det svårt att veta vilken ”väg” som är den rätta – eller om det ens finns en mer rätt eller fel väg. 
            Exempelvis, borde jag lagra alla värden i ett objekt som jag sparar till nästa omgång och då plockar ut värdena från detta objekt eller ska jag lagra värdena direkt i arrayen. Eller kanske ska jag skicka med värdena i länken. 
                Den typen av val kan vara lite knepigt att komma fram till. Oophp-20 läste jag igenom och provade flera delar. 
                Det flöt på utan större svårigheter. 
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
