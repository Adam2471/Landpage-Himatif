<?php

class M_login extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function tampil_data()
    {
        return $this->db->get('pendaftaran');
    }
    function tampil_data_esport()
    {
        return $this->db->get('lomba_esport');
    }
    function tampil_data_sport()
    {
        return $this->db->get('lomba_sport');
    }
    function tampil_data_iot()
    {
        return $this->db->get('iot');
    }
    function tampil_data_uiux()
    {
        return $this->db->get('uiux');
    }
    function tampil_data_poster()
    {
        return $this->db->get('poster');
    }
    function tampil_data_film()
    {
        return $this->db->get('film');
    }
    function tampil_data_workshop()
    {
        return $this->db->get('workshop');
    }
    function tampil_data_semnas()
    {
        return $this->db->get('semnas');
    }
    function tampil_data_ubah_password()
    {
        return $this->db->get('admin');
    }
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // Added by Reza Riyaldi - 06/sept/2022
    public function check_peserta_semnas($nim)
    {
        return $this->db->where('nim', $nim)
                        ->get('semnas')
                        ->num_rows();
        
    }
}
