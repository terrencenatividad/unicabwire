<?php
class controller extends wc_controller {

	public function index() {
		$this->view->title = 'Home Page';
		$this->view->load('home');
	}
}