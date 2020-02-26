<?php

class esportesController extends controller {

    public function index() {

        $abouts = new About();

        $data = $abouts->getAll(1);

        $this->loadTemplate('esportes', $data);
        
    }

}