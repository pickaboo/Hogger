<?php

class castClass {

    public function kastaIt() {
        $this->throw = RAND(1, 6);
        $_SESSION ['slag'] = $this->throw;
        if ($this->throw == 1) {
            $_SESSION ['rounds'] ++;
            $_SESSION ['roundPoints'] = 0;
        } else {

            $_SESSION ['roundPoints'] = $_SESSION['roundPoints'] + $this->throw;
        }
    }

}

?>