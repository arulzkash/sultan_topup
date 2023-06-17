<?php
class M_Admin extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($username) {
        $query = $this->db->get_where('t_admin', array('username' => $username));
        return $query->row_array();
    }
}
