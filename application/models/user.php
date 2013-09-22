
<?php

Class User extends CI_Model {

    function login($username, $password) {
        $this->db->select('id, username, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function listarTodos() {
        $query = $this->db->get('tb_mock');
        return $query->result_array();
    }

    function listarPaginacion($limite,  $nPagXview) {
        $this->db->select('id, name, password');
        $this->db->from('tb_mock');
        $this->db->limit($nPagXview,$limite);
        $query = $this->db->get();
        return $query->result_array();
    }

    function numTotalPagView($nPagXview) {
        $num= round($this->db->count_all('tb_mock')/ $nPagXview);
        return $num;
    }

}

?>