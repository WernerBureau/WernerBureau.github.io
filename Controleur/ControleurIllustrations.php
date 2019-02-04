<?php

require_once 'Framework/Controleur.php';

class ControleurIllustrations extends Controleur {

    public function __construct() {

    }

    public function index() {
        $this->genererVue();
    }

}