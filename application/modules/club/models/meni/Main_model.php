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
		public function detail_club_by_club_class($data = array()){
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
					')
				->where(
					'cb.club_class', $data['club_class']
				);
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->result_array()) ? $query->result_array() : false;
		}
		public function check_club(){
			$data_name = 'club_setting';
			// // table_exists
			if ($this->db->table_exists($data_name) == false) {
				return false;
			}
				$query = $this->db
				->select('
				cb.club_setting_status as status,
					');
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->row_array()) ? $query->row_array() : false;
		}
		
		public function detail_club_by_club_code($data = array()){
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
				->where('cb.club_code', $data['club_code']);
			$query = $this->db->get($data_name . ' cb');
			// return result_array, result, row_array, row
			return !empty($query->row_array()) ? $query->row_array() : false;
		}

	// Model
	}
?>
