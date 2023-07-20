<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Api_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

	// Model
	public function list_club($data = array()){
        $data_name = 'club';
        // // table_exists
        if ($this->db->table_exists($data_name) == false) {
            return false;
        }
		if (isset($data['club_class'])) {
			$query = $this->db
			->select('
			cb.club_code as clubcode,
			cb.club_name as clubname,
			cb.club_amount as clubamount,
			cb.club_status as clubstatus,
				')
			->where('cb.club_class', $data['club_class']);
		}else{
			$query = $this->db
			->select('
			cb.club_code as clubcode,
			cb.club_name as clubname,
			cb.club_status as clubstatus,
				');
		}
        $query = $this->db->get($data_name . ' cb');
        // return result_array, result, row_array, row
        return !empty($query->result_array()) ? $query->result_array() : false;
    }

	public function select_club_log_by_user_code($data = array()) {
		$data_name = 'club_log';
		if ($this->db->table_exists($data_name) == false) {
            return false;
        }
		$query = $this->db
		->select('
		cb.club_code as clubcode,
		cb.user_code as usercode,
		cb.club_log_date as clublogdate,
			')
		->where('cb.user_code', $data['user_code']);
		$query = $this->db->get($data_name . ' cb');
		return !empty($query->row_array()) ? $query->row_array() : false;
	}

	public function select_club_log_by_club_code($data = array()) {
		$data_name = 'club_log';
		if ($this->db->table_exists($data_name) == false) {
            return false;
        }
		$query = $this->db
		->select('
		cb.club_code as clubcode,
		cb.user_code as usercode,
		cb.club_log_date as clublogdate,
			')
		->where('cb.club_code', $data['club_code']);
		$query = $this->db->get($data_name . ' cb');
		return !empty($query->result_array()) ? $query->result_array() : false;
	}
	
	public function select_club_by_clubcode($data = array()) {
		$data_name = 'club';
		if ($this->db->table_exists($data_name) == false) {
            return false;
        }
		$query = $this->db
		->select('
		cb.club_code as clubcode,
		cb.club_name as clubname,
		cb.club_amount as clubamount,
		cb.club_status as clubstatus,
		club_class as clubclass,
			')
		->where('cb.club_code', $data['club_code']);
		$query = $this->db->get($data_name . ' cb');
		return !empty($query->row_array()) ? $query->row_array() : false;
	}

    public function post_club_by_usercode($data = array()){
        $data_name = 'club_log';
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

    public function cancel_club_by_usercode($data = array()){
        $data_name = 'club_log';
        // table_exists
        if ($this->db->table_exists($data_name) == false) {
            return false;
        }
        // $query
		$query = $this->db
		->where('club_code', $data['club_code'])
		->where('user_code', $data['user_code'])
		->delete($data_name);
        // return result_array, result, row_array, row
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
    }

	}
?>
