<?php 

class economiaController extends controller {

    public function index() {

        $abouts = new About();

        $data = $abouts->getAll(2);

        $this->loadTemplate('economia', $data);

    }

}