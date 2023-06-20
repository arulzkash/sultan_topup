<?php
class M_User extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($username) {
        $query = $this->db->get_where('t_user', array('username' => $username));
        return $query->row_array();
    }
    
}
