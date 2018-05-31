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
		// ->setLimit(1)
		->runSelect()
		->getResult();
	}
}

?>