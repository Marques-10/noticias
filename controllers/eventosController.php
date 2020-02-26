<?php

class eventosController extends controller {

    public function index() {

        $Abouts = new About();

        $data = $Abouts->getAll(4);

        $this->loadTemplate('eventos', $data);
        
    }

}