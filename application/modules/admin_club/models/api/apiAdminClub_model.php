<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class apiAdminClub_model extends CI_Model
	{
	// Model

		private $table = array();

		public function __construct()
		{
			parent::__construct();
			// $this->table['nl_n'] = 'naelike';
		}

		public function insert_club($data = array()){
			$data_name = 'club';
			// table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
			// $query
			$this->db->insert($data_name, $data);
			return $this->db->insert_id();
			// return result_array, result, row_array, row
	//        return !empty($query->row_array()) ? $query->row_array() : false;
		}

		public function slectclub_by_usercode($data = array()){
			$data_name = 'club';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
				$query = $this->db
				->select('
				cb.club_id as clubid,
				cb.club_code as clubcode,
				cb.club_name as clubname,
				cb.club_amount as clubamount,
				cb.club_status as clubstatus,
				cb.club_class as clubclass,
				cb.club_place as clubplace,
				cb.club_teacher as clubteacher,
				cb.club_category_subject as clubsubject,
				cb.club_objective as clubobjective,
				cb.club_spectified as clubspectified,
				cb.club_description as clubdescription,
				cb.club_resource as clubresource,
				cb.club_plan as clubplan,
				cb.club_assessment as clubassessment,
				cb.create_by_usercode as createbyusercode,
					')
				->where('cb.create_by_usercode', $data['user_code']);
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->result_array()) ? $query->result_array() : false;
		}

		public function delete_club_by_club_id($data = array()){
				// if table_exists
				$data_name = 'club';
			if (empty($data['club_id']) || !$this->db->table_exists($data_name)) {
			return false;
				}else{
			// $query
			$this->db
				->where('club_id', $data['club_id'])
				->delete($data_name);
			return true;
				}

		}

		public function slect_club_by_club_id($data = array()){
			$data_name = 'club';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
				$query = $this->db
				->select('
				cb.club_code as clubcode,
				cb.club_name as clubname,
				cb.club_amount as clubamount,
				cb.club_status as clubstatus,
				cb.club_class as clubclass,
				cb.club_place as clubplace,
				cb.club_teacher as clubteacher,
				cb.club_category_subject as clubsubject,
				cb.club_objective as clubobjective,
				cb.club_spectified as clubspectified,
				cb.club_description as clubdescription,
				cb.club_resource as clubresource,
				cb.club_plan as clubplan,
				cb.club_assessment as clubassessment,
				cb.create_by_usercode as createbyusercode,
					')
				->where('cb.club_id', $data['club_id']);
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->row_array()) ? $query->row_array() : false;
		}

		public function slect_club_by_club_status($data = null){
			$data_name = 'club';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
			if($data == null){
				$query = $this->db
				->select('
				cb.club_id as clubid,
				cb.club_code as clubcode,
				cb.club_name as clubname,
				cb.club_amount as clubamount,
				cb.club_status as clubstatus,
				cb.club_class as clubclass,
				cb.club_place as clubplace,
				cb.club_teacher as clubteacher,
				cb.club_category_subject as clubsubject,
				cb.club_objective as clubobjective,
				cb.club_spectified as clubspectified,
				cb.club_description as clubdescription,
				cb.club_resource as clubresource,
				cb.club_plan as clubplan,
				cb.club_assessment as clubassessment,
				cb.create_by_usercode as createbyusercode,
					');
			}else{
				$query = $this->db
				->select('
				cb.club_id as clubid,
				cb.club_code as clubcode,
				cb.club_name as clubname,
				cb.club_amount as clubamount,
				cb.club_status as clubstatus,
				cb.club_class as clubclass,
				cb.club_place as clubplace,
				cb.club_teacher as clubteacher,
				cb.club_category_subject as clubsubject,
				cb.club_objective as clubobjective,
				cb.club_spectified as clubspectified,
				cb.club_description as clubdescription,
				cb.club_resource as clubresource,
				cb.club_plan as clubplan,
				cb.club_assessment as clubassessment,
				cb.create_by_usercode as createbyusercode,
					')
				->where('cb.club_status', $data);
			}
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->result_array()) ? $query->result_array() : false;
		}

		public function update_club_by_club_id($data = array()){
			$data_name = 'club';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
			// $query
			$this->db
				->where('club_id', $data['club_id'])
				->update($data_name, $data);
			return true;
		}

		public function update_status_club_setting($status = null){
			$data_name = 'club_setting';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
			// $query
			$this->db
				->where('club_setting_id', 1)
				->update($data_name, array('club_setting_status' =>  $status));
			return true;
		}

		
		public function select_status_club_setting(){
			$data_name = 'club_setting';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
				$query = $this->db
				->select('
				cb.club_setting_status as status,
					')
				->where('cb.club_setting_id', 1);
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->row_array()) ? $query->row_array() : false;
		}

		public function select_club_by_club_code($data = array()){
			$data_name = 'club_log';

			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
				$query = $this->db
				->select('
				cb.club_log_id as clublogid,
				cb.club_code as clubcode,
				cb.user_code as usercode,
					')
				->where('cb.club_code', $data['club_code']);
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->result_array()) ? $query->result_array() : false;

		}

		public function list_club_log(){
			$data_name = 'club_log';

			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
				$query = $this->db
				->select('
				cb.club_log_id as clublogid,
				cb.club_code as clubcode,
				cb.user_code as usercode,
					');
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->result_array()) ? $query->result_array() : false;

		}
	// Model
	}
?>
