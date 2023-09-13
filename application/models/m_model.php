<?php

class M_model extends CI_Model{
    // get_data dibawah nanti diambil untuk file Home.php di folder models
    function get_data($table){
        return $this->db->get($table);
    }
}

?>