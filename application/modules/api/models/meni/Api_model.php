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

	}
?>
