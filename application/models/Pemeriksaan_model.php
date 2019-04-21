<?php

class Pemeriksaan_model extends MY_Model
{
    protected $table = "pemeriksaan";

    protected $primary_key = "kd_pemeriksaan";

    public function generate_kd_pemeriksaan()
    {
        $num = $this->count_all();
        $kd = "RM". str_pad($num+1, 4, "0", STR_PAD_LEFT);

        return $kd;
    }

    public function get_all()
    {
        $this->set_field(array(
            'pemeriksaan.kd_pemeriksaan',
            'pasien.nama as nama_pasien',
            'dokter.nama as nama_dokter',
            'pemeriksaan.hasil_pemeriksaan',
            'pemeriksaan.resep'
        ));
        $this->db->join('pasien', 'pasien.kd_pasien = pemeriksaan.kd_pasien')
                ->join('dokter', 'dokter.kd_dokter = pemeriksaan.kd_dokter');

        return parent::get_all();
    }
}
