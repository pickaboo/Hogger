<?php

class diceClass {

    // property declaration
    public $throw;
    public $rounds;
    public $totalPoints;
    public $roundPoints;
    public $_session;
    public $returnstring;
    public $startstring;
    public $tada;
    public $done = false;

    public function setVars() {
        $this ->throw = $_SESSION['slag'];
        $this->rounds = $_SESSION ['rounds'];
        $this->totalPoints = $_SESSION ['totalPoints'];
        $this->roundPoints = $_SESSION ['roundPoints'];
        $this->tada = "<h3>Grattis!! Du klarade det på " . $this->rounds . " rundor</h3> <p><a href='Dice.php?action=0'>Ny runda</a></p> ";
    }

    // New throw and store it in $_Session throw
    public function tarning() {

        if (htmlspecialchars($_GET["action"]) === "0") {
            $this->start();
            $this->setVars();
            return $this ->startstring;
           
        }
        if (htmlspecialchars($_GET["action"]) === "throw") {
            $this->throwIt();
            $this->setVars();
        }
        if (htmlspecialchars($_GET["action"]) === "save") {
            $this->totPoints();
            $this->rounds++;
            $this->setVars();
            if ($this->totalPoints >= 100) {
                return $this->tada;
            }
        }

        return $this->outIt();
    }

    public function throwIt() {
        $kast = new castClass();
        $kast->kastaIt ();
        
    }

    public function totPoints() {
        $runda = new rundaClass();
        $runda->totPoints();
    }

    public function start() {

        $this->throw = 0;

        $_SESSION ['roundPoints'] = 0;
        $_SESSION ['slag'] = 0;
        $_SESSION ['totalPoints'] = 0;
        $_SESSION ['rounds'] = 0;
        $this->startstring = "Detta spelet går ut på att du ska nå 100 poäng på så få omgångar som möjligt.\n DU kan slå hur många gånger du vill och kan när som helst spara dina poäng. \n Slår du en 1;a så nollställs dina poäng och rundan avslutas. När du väljer att spara dina poäng ränkas detta också som en runda. Lycka till! Klicka på [Kasta] för att börja spelet. "
                . "<p><a href='http://www.student.bth.se/~anhu13/oophp/kmom02/Hogger/webroot/Dice.php?action=throw'>KASTA</a></p>";
       
    }

    public function outIt() {
        $this->returnstring = "" . "<p>Tryck [KASTA] för att kasta tärningarna och [SPARA] för att spara resultatet</p>"
                . "<p>Senaste kast: $this->throw </p> "
                . "<p>Poäng totalt: $this->totalPoints </p> "
                . "<p><h3>Antal rundor: $this->rounds </p>  </h3>" . " <p>Poäng denna rundan: $this->roundPoints </p> "
                . "<p><a style = 'margin-right: 20px;' href='http://www.student.bth.se/~anhu13/oophp/kmom02/Hogger/webroot/Dice.php?action=save'>SPARA</a>  "
                . "<a href='http://www.student.bth.se/~anhu13/oophp/kmom02/Hogger/webroot/Dice.php?action=throw'>KASTA</a></p>";

        return $this->returnstring;
    }

}
?>


