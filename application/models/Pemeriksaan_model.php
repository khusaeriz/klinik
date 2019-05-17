<?php

class Pemeriksaan_model extends MY_Model
{
    protected $table = "pemeriksaan";

    protected $primary_key = "kd_pemeriksaan";

    public function generate_kd_pemeriksaan()
    {
        $num = $this->last_id();
        $kd = "RM".date('y'). str_pad($num+1, 4, "0", STR_PAD_LEFT);

        return $kd;
    }

    public function get_detail($id)
    {
        $this->set_field(array(
            'pemeriksaan.kd_pemeriksaan',
            'pasien.nama as nama_pasien',
            'dokter.nama as nama_dokter',
            'pemeriksaan.hasil_pemeriksaan',
            'pemeriksaan.resep',
            'pemeriksaan.biaya'
        ));
        $this->db->join('pasien', 'pasien.kd_pasien = pemeriksaan.kd_pasien')
                ->join('dokter', 'dokter.kd_dokter = pemeriksaan.kd_dokter');

        return parent::get_one($id);
    }

    public function get_all()
    {
        $this->set_field(array(
            'pemeriksaan.kd_pemeriksaan',
            'pasien.nama as nama_pasien',
            'dokter.nama as nama_dokter',
            'pemeriksaan.hasil_pemeriksaan',
            'pemeriksaan.resep',
            'pemeriksaan.biaya'
        ));
        $this->db->join('pasien', 'pasien.kd_pasien = pemeriksaan.kd_pasien')
                ->join('dokter', 'dokter.kd_dokter = pemeriksaan.kd_dokter');

        return parent::get_all();
    }

    public function last_id()
    {
        $query = $this->db->select($this->primary_key)
                    ->order_by($this->primary_key, 'desc')
                    ->get($this->table);

        $result = $query->row()->kd_pemeriksaan;

        return (int) substr($result, 3, strlen($result));
    }
}
