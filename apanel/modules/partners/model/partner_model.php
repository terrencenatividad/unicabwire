<?php
class partner_model extends wc_model {

	public function __construct() {
		parent::__construct();
		$this->log = new log();
	}

	public function getPartners($data, $sort, $search) {
		$condition = '';
		if ($search) {
			$condition .= $this->generateSearch($search, array('image'));
		}
		$result = $this->db->setTable('partners')
		->setFields($data)
		->setWhere($condition)
		->setOrderBy($sort)
		->runPagination();
		return $result;
	}

	private function generateSearch($search, $array) {
		$temp = array();
		foreach ($array as $arr) {
			$temp[] = $arr . " LIKE '%" . str_replace(' ', '%', $search) . "%'";
		}
		return '(' . implode(' OR ', $temp) . ')';
	}

	public function savePartners($data) {
		$result = $this->db->setTable('partners')
		->setValues($data)
		->runInsert();

		return $result;
	}


	public function getImageById($fields, $id) {
		return $this->db->setTable('partners')
		->setFields($fields)
		->setWhere("id = '$id'")
		->setLimit(1)
		->runSelect()
		->getRow();

		return $result;
	}

	public function updatePartners($data, $id) {
		$result = $this->db->setTable('partners')
		->setValues($data)
		->setWhere("id = '$id'")
		->setLimit(1)
		->runUpdate();

		if ($result) {
			$this->log->saveActivity("Update Banner [$id]");
		}

		return $result;
	}

	public function deletePartners($data) {
		$error_id = array();
		foreach ($data as $id) {
			$result =  $this->db->setTable('partners')
			->setWhere("id = '$id'")
			->setLimit(1)
			->runDelete();

			if ($result) {
				$this->log->saveActivity("Delete Item Type [$id]");
			} else {
				if ($this->db->getError() == 'locked') {
					$error_id[] = $id;
				}
			}
		}

		return $error_id;
	}
	
}