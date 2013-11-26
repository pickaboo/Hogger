<?php

class rundaClass {

public function totPoints() {

        $_SESSION ['totalPoints'] = $_SESSION ['totalPoints'] + $_SESSION ['roundPoints'];
        $_SESSION ['roundPoints'] = Null;
        $_SESSION ['slag'] = Null;
        $this ->throw =Null;
        $_SESSION ['rounds'] ++;
       
    }
}

?>