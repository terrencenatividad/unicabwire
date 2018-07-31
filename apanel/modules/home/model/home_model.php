<?php
class home_model extends wc_model {

	public function __construct() {
		parent::__construct();
		$this->log = new log();
	}

	public function getBanner($data) {
		return $result = $this->db->setTable("banner")
		->setFields($data)
		->runSelect()

		->getResult();
	}

	public function getProducts() {
		return $result = $this->db->setTable("products")
		->setFields('id , image , product_description, product_category')
		->runSelect()
		->getResult();
	}

	public function getNews() {
		return $result = $this->db->setTable("news")
		->setFields('id , title , date')
		->runSelect()
		->getResult();
	}

	public function getAboutUs() {
		return $result = $this->db->setTable("aboutus")
		->setFields('id , title')
		->setLimit(4)
		->runSelect()
		->getResult();
	}
}

?>