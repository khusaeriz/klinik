<?php

class Dokter_model extends MY_Model
{
    protected $table = "dokter";

    protected $primary_key = "kd_dokter";

    public function get_last_number($spesialis)
    {
        $query = $this->db->like('kd_dokter', $spesialis)
                        ->order_by('kd_dokter', 'desc')
                        ->limit(1)
                        ->get('dokter');
        if ($query->num_rows() < 1) {
            return str_pad(1, 2, 0, STR_PAD_LEFT);
        } else {
            $last_number = (int) substr($query->row()->kd_dokter, 4, 2)+1;
            return str_pad($last_number, 2, 0, STR_PAD_LEFT);
        }
    }
}
