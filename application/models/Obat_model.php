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
}
