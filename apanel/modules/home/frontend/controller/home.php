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
<<<<<<< HEAD
		$data['news'] = $this->home->getNews();
		$data['about_us'] = $this->home->getAboutUs();
=======
>>>>>>> 41bcd012ecfb869326d77fd9e0973f29a5a91b15
		$this->view->load('home', $data);
	}
}