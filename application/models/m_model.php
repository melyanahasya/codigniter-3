<?php

class M_model extends CI_Model
{
    // get_data dibawah nanti diambil untuk file Home.php di folder controller
    function get_data($table)
    {
        return $this->db->get($table);
    }

    public function getData()
    {
        // Query database untuk mengambil data
        $query = $this->db->get('siswa');
        return $query->result();
    }

    function getwhere($table, $data)
    {

        return $this->db->get_where($table, $data);
    }



}

?>