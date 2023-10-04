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

    public function getDataPembayaran()
    {
        $this->db->select('pembayaran.*,siswa.nama_siswa, kelas.tingkat_kelas, kelas.jurusan_kelas');
        $this->db->from('pembayaran');
        $this->db->join('siswa', 'pembayaran.id_siswa = siswa.id_siswa', 'left');
        $this->db->join('kelas', 'pembayaran.id_kelas = kelas.id', 'left');
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
    public function ubah_data($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }


    public function get_id_akun($tabel, $id_column, $id)
    {
        $data = $this->db->where($id_column, $id)->get($tabel);
        return $data;
    }

    public function ubah_data_akun($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }

    public function getAkun()
    {
        $this->db->select('siswa.*,kelas.tingkat_kelas, kelas.jurusan_kelas');
        $this->db->from('siswa');
        $this->db->join('kelas', 'siswa.id_kelas = kelas.id', 'left');
        // Query database untuk mengambil data
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah_pembayaran($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    function delete_pembayaran($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }

    //   Import pembayaran
    public function get_by_nisn($nisn)
    {
        $this->db->select('id_siswa');
        $this->db->from('siswa');
        $this->db->where('nisn', $nisn);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->id_siswa;
        } else {
            return false;
        }
    }

    //   Import siswa
    public function get_by_kelas($tingkat_kelas)
    {
        $this->db->select('id');
        $this->db->from('kelas');
        $this->db->where('tingkat_kelas', $tingkat_kelas);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->id;
        } else {
            return false;
        }
    }
   
}

?>