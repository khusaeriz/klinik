<?php

class Pasien_model extends MY_Model
{
    protected $table = "pasien";

    protected $primary_key = "kd_pasien";

    public function generate_kd_pasien()
    {
        $num = $this->count_all();
        $kd = "P".str_pad($num+1, 4, "0", STR_PAD_LEFT);

        return $kd;
    }

    public function hitung_umur($pasien)
    {
        $return = [];
        $today = new DateTime(date('d-m-Y')); // hari ini

        foreach ($pasien as $key => $value) {
            $bday = new DateTime($value->tgl_lahir); // tgl lahir
            $umur = $today->diff($bday);
            $value->umur = $umur->y;
            $return[] = $value;
        }

        return $return;
    }
}
