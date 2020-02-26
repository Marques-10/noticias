<?php

class tecnologiaController extends controller {

    public function index() {

        $abouts = new About();

        $data = $abouts->getAll(3);

        $this->loadTemplate('tecnologia', $data);

    }

}