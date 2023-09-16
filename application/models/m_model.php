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
        $this->db->select('siswa.*,kelas.tingkat_kelas, kelas.jurusan_kelas');
        $this->db->from('siswa');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id', 'left');
        // Query database untuk mengambil data
        $query = $this->db->get();
        return $query->result();
    }

    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }


    function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }

    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }


    // 1. get id untuk Ubah
    public function get_by_id($tabel, $id_column, $id)
    {
        $data = $this->db->where($id_column, $id)->get($tabel);
        return $data;
    }

    // Ubah
    public function ubah_data($tabel,$data,$where){
        $data=$this->db->update($tabel,$data,$where);
        return $this->db->affected_rows();
    }
}

?>