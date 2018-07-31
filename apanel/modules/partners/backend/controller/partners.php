<?php
class controller extends wc_controller {
	public function __construct() {
		parent::__construct();
		$this->ui				= new ui();
		$this->input			= new input();
		$this->partners	    = new partner_model();
		$this->session			= new session();
		$this->fields 			= array(
			'id',
			'image'
		);
	}

	public function listing() {
		$this->view->title = 'Partners';
		$data['ui'] = $this->ui;
		$all = (object) array('ind' => 'null', 'val' => 'Filter: All');
		$this->view->load('partner_list', $data);
	}
	
	public function create() {
		$this->view->title = 'Add Partner Image';
		$data = $this->input->post($this->fields);
		$data['ui'] = $this->ui;
		$data['ajax_task'] = 'ajax_create';
		$data['ajax_post'] = '';
		$data['show_input'] = true;
		$this->view->load('partners', $data);
	}
	
	public function edit($id) {
		$this->view->title = 'Edit Partner Image';
		$data = (array) $this->partners->getImageById($this->fields, $id);
		$data['ui'] = $this->ui;
		$data['ajax_task'] = 'ajax_edit';
		$data['ajax_post'] = "&id=$id";
		$data['show_input'] = true;
		$this->view->load('partners', $data);
	}
	
	public function view($id) {
		$this->view->title = 'View Partner Image';
		$data = (array) $this->partners->getImageById($this->fields, $id);
		$data['ui'] = $this->ui;
		$data['ajax_task'] = 'ajax_view';
		$data['show_input'] = false;
		$this->view->load('partners', $data);
	}

	public function ajax($task) {
		$ajax = $this->{$task}();
		if ($ajax) {
			header('Content-type: application/json');
			echo json_encode($ajax);
		}
	}
	
	private function ajax_list() {
		$data  = $this->input->post(array('search', 'sort'));
		$search  = $data['search'];
		$sort  = $data['sort'];

		$pagination = $this->partners->getPartners($this->fields, $sort , $search);
		$table = '';
		if (empty($pagination->result)) {
			$table = '<tr><td colspan="9" class="text-center"><b>No Records Found</b></td></tr>';
		}
		foreach ($pagination->result as $key => $row) {
			$table .= '<tr>';
			$dropdown = $this->ui->loadElement('check_task')
			->addView()
			->addEdit()
			->addPrint()
			->addDelete()
			->addCheckbox()
			->setValue($row->id)
			->draw();
			$table .= '<td align = "center">' . $dropdown . '</td>';
			$table .= '<td>
			<img src="' . str_replace('/apanel', '', BASE_URL) . "uploads/items/thumb/".$row->image.'"></td>';
			$table .= '</tr>';
		}

		$pagination->table = $table;
		return $pagination;
	}


	private function ajax_create() {
		$image_uploader = new image_uploader();
		$filename = $image_uploader->setSize(array('large','thumb'))
		->setFolderName('../uploads/items')
		->getImage('item_image');

		$data = $this->input->post($this->fields);
		$data['image'] = $filename;

		$result = $this->partners->savePartners($data);
		return array(
			'redirect'	=> MODULE_URL,
			'success'	=> $result
		);
	}

	private function ajax_edit() {
		$image_uploader = new image_uploader();
		$filename = $image_uploader->setSize(array('large','thumb'))
		->setFolderName('../uploads/items')
		->getImage('item_image');
		$data = $this->input->post($this->fields);
		$data['image'] = $filename;

		if(empty($filename)) {
			$data = $this->input->post($this->fields);
			$image_name = $this->input->post('image-edit');
			$data['image'] = $image_name;
		} else {
			$data = $this->input->post($this->fields);
			$data['image'] = $filename;
		}

		$id = $this->input->post('id');
		$result = $this->partners->updateBanner($data, $id);
		return array(
			'redirect'	=> MODULE_URL,
			'success'	=> $result
		);
	}
	
	private function ajax_delete() {
		$delete_id = $this->input->post('delete_id');
		$error_id = array();
		if ($delete_id) {
			$error_id = $this->partners->deleteBanner($delete_id);
		}
		return array(
			'success'	=> (empty($error_id)),
			'error_id'	=> $error_id
		);
	}
	
	
}
