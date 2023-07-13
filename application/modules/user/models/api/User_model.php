<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    // Model

    private $table = array();

    public function __construct()
    {
        parent::__construct();
    }
    public function user_register($data = array()){
        $data_name = 'users_user';
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

    public function select_user($data = array()){
        $data_name = 'users_user';
        // // table_exists
        if ($this->db->table_exists($data_name) == false) {
            return false;
        }
        // $query
        $query = $this->db
            ->select('
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
            ->where('lu.user_name', $data['user_name']);
        $query = $this->db->get($data_name . ' lu');
        // return result_array, result, row_array, row
        return !empty($query->row_array()) ? $query->row_array() : false;
    }

    public function update_password_with_user_code($data = array()){
        $data_name = 'users_user';
        // // table_exists
        if ($this->db->table_exists($data_name) == false) {
            return false;
        }
        // $query
        $query = $this->db
        ->set('user_password',$data['new_password'])
        ->where('user_code',$data['user_code'])
        ->update('users_user');
        $query = $this->db->get($data_name . ' up');
        // return result_array, result, row_array, row
        return !empty($query->row_array()) ? $query->row_array() : false;
    }

    public function select_by_usercode($data = array()){
        $data_name = 'users_user';
        // // table_exists
        if ($this->db->table_exists($data_name) == false) {
            return false;
        }
        // $query
        $query = $this->db
            ->select('
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
            ->where('lu.user_code', $data['user_code']);
        $query = $this->db->get($data_name . ' lu');
        // return result_array, result, row_array, row
        return !empty($query->row_array()) ? $query->row_array() : false;
    }
}
