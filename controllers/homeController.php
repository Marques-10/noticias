<?php

class homeController extends controller {
	
	public function index() {

		$this->checkPost();

		$abouts = new About();

		$data = array();

		foreach($abouts->getAbout() as $teste){
			$data[$teste['id']] = $teste['about'];
		}
		
		$this->loadTemplate('home', $data);
	}

	public function checkPost() {

		if (isset($_POST['title-notice']) && !empty($_POST['title-notice']) &&
			isset($_POST['about']) && !empty($_POST['about']) &&
			isset($_POST['notice']) && !empty($_POST['notice'])) 
		{
			$title = $_POST['title-notice'];
			$about = $_POST['about'];
			$notice = $_POST['notice'];

			$abouts = new About();

			$abouts->saveNotice($title, $about, $notice);

		} else {
			header("Location:", BASE_URL);
		}

	}

}