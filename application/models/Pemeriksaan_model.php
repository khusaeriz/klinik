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

    public function rekam_medis($kd_pasien)
    {
        $q = $this->db->select('pemeriksaan.tgl_pemeriksaan')
                    ->where('pemeriksaan.kd_pasien', $kd_pasien);
        
        return $this->get_all();
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
            'pasien.kd_pasien',
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

        if ($query->num_rows() < 1) {
            return 0;
        }

        return  substr($query->row()->kd_pemeriksaan, 4, 4);
    }
}
