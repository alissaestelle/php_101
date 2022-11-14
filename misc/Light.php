<?php 

class Light {

    public $switchOn = false;

    public function on() {
        $this->switchOn = true;
    }

    public function off() {
        $this->switchOn = false;
    }
}

?>