<?php
class MahasiswaTransfer extends Mahasiswa
{
    private $daftar_nilai, $ipk = 0, $total_sks = 0, $total_bobot = 0;
    private $bobot = [
        'A' => 4,
        'B' => 3,
        'C' => 2,

    ];

    public function __construct($daftar_nilai = [])
    {
        $this->daftar_nilai = $daftar_nilai;
        $this->getIPK();
        $this->status = "Tidak Aktif";
    }

    public function getIPK()
    {
        if(!empty($this->daftar_nilai))
        {
            foreach($this->daftar_nilai as $data)
            {
                $this->total_sks += $data['sks'];
                $this->total_bobot += $data['sks'] * $this->bobot[$data['nilai']];
            }
            $this->ipk = $this->total_bobot / $this->total_sks;
        }

        return $this->ipk;
    }

    public function getData()
    {
       return array_merge(parent::getData(), [
           'daftar_nilai' => $this->daftar_nilai,
           'ipk' => $this->ipk
       ]);
    }
}