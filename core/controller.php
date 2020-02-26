<?php

class controller {
	
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		if (is_array($viewData)) {
			extract($viewData);
		}
		require 'views/'.$viewName.'.php';
	}

}