<?php

require_once 'Framework/Controleur.php';

class ControleurCommissions extends Controleur {

    public function __construct() {

    }

    public function index() {
        $this->genererVue();
    }

}