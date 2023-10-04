<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Main_model extends CI_Model
	{
	// Model

		private $table = array();

		public function __construct()
		{
			parent::__construct();
			// $this->table['nl_n'] = 'naelike';
		}

		public function select_user_by_id($data = array()){
			$data_name = 'users_user';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
			// $query
			$query = $this->db
				->select('
						lu.user_code as usercode,
						lu.user_code as usercode,
						lu.user_name as username,
						lu.student_id as studentID,
						lu.user_email as email,
						lu.user_firstname as firstname,
						lu.user_lastname as lastname,
						lu.user_class as class,
						lu.user_class_room as room,
						lu.user_password as password,
						lu.user_status as status,
						lu.user_role_code as role,
						lu.user_create_date as date,
					')
				->where('lu.user_id', $data['user_id']);
			$query = $this->db->get($data_name . ' lu');
			// return result_array, result, row_array, row
			return !empty($query->row_array()) ? $query->row_array() : false;
		}

		public function list_user($data = null){
			$data_name = 'users_user';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
			if(isset($data)){
				$query = $this->db
				->select('
						lu.user_id as userid,
						lu.user_code as usercode,
						lu.user_name as username,
						lu.student_id as studentID,
						lu.user_email as email,
						lu.user_firstname as firstname,
						lu.user_lastname as lastname,
						lu.user_class as class,
						lu.user_class_room as room,
						lu.user_status as status,
						lu.user_role_code as role,
					')
				->LIKE('lu.student_id', $data, 'after');
			}else{
				$query = $this->db
				->select('
						lu.user_id as userid,
						lu.user_code as usercode,
						lu.user_name as username,
						lu.student_id as studentID,
						lu.user_email as email,
						lu.user_firstname as firstname,
						lu.user_lastname as lastname,
						lu.user_class as class,
						lu.user_class_room as room,
						lu.user_status as status,
						lu.user_role_code as role,
					');
			}
			$query = $this->db->get($data_name . ' lu');
			// return result_array, result, row_array, row
			return !empty($query->result_array()) ? $query->result_array() : false;
		}

		public function delete_user_by_id($data = array()){
				// if table_exists
				$data_name = 'users_user';
			if (empty($data['user_id']) || !$this->db->table_exists($data_name)) {
			return false;
				}else{
			// $query
			$this->db
				->where('user_id', $data['user_id'])
				->delete($data_name);
			return true;
				}
    }

		public function update_user($data = array()){

			$data_name = 'users_user';
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}

			$this->db->where('user_id', $data['user_id']);
			$this->db->update($data_name, $data);
			return $this->db->affected_rows(); 
		}

		public function update_password_user($data = array()){

			$data_name = 'users_user';
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}

			$this->db->where('user_id', $data['user_id']);
			$this->db->update($data_name, $data);
			return $this->db->affected_rows(); 
		}

		public function select_user_by_student_id($data){
			$data_name = 'users_user';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
			// $query
			$query = $this->db
				->select('
						lu.user_id as userid,
						lu.user_code as usercode,
						lu.user_name as username,
						lu.student_id as studentID,
						lu.user_email as email,
						lu.user_firstname as firstname,
						lu.user_lastname as lastname,
						lu.user_class as class,
						lu.user_class_room as room,
						lu.user_status as status,
						lu.user_role_code as role,
					')
				->where('lu.student_id', $data);
			$query = $this->db->get($data_name . ' lu');
			// return result_array, result, row_array, row
			return !empty($query->result_array()) ? $query->result_array() : false;
		}

	// Model
	}
