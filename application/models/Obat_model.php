<?php

class Obat_model extends MY_Model
{
    protected $table = "obat";

    protected $primary_key = "kd_obat";

    public function get_in($id = array())
    {
        $query = $this->db->where_in($this->primary_key, $id)->get($this->table);
		
        return $query->result();
    }

    public function get_kode($nama)
    {
        $nama = substr($nama, 0, 3);
        $num = 0;
        $query = $this->db->like('kd_obat', $nama)
                        ->order_by('kd_obat', 'desc')
                        ->limit(1)
                        ->get($this->table);

        if ($query->num_rows() > 0) {
            $num = (int) substr($query->row()->kd_obat, 4, 3);
        }

        return strtoupper($nama).str_pad($num+1, 3, 0, STR_PAD_LEFT);
    }

    public function restokObat($ids, $number)
    {
        $stok = $this->db->where_in('kd_obat', $ids)
                        ->get($this->table);

        $data = array();
        foreach ($stok->result() as $key => $value) {
            $data[] = array(
                'kd_obat' => $value->kd_obat,
                'stok'    => $value->stok < 1 ? 0 : $value->stok-$number
            );
        }

        $q = $this->db->update_batch($this->table, $data, 'kd_obat');

        return $q;
    }
}
