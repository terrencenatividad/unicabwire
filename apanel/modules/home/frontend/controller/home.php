<?php
class controller extends wc_controller {

	public function __construct() {
		parent::__construct();
		$this->home			= new home_model();
		$this->session		= new session();

		$this->fields 			= array(
			'id',
			'image'
		);

		$this->data = array();
	}
	

	public function index() {
		$this->view->title = 'Home';
		$data['banner'] = $this->home->getBanner($this->fields);
		$data['products'] = $this->home->getProducts();
		$data['news'] = $this->home->getNews();
		$data['about_us'] = $this->home->getAboutUs();
		$this->view->load('home', $data);
	}
}