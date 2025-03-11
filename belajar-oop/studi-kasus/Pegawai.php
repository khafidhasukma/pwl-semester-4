<?php
class Pegawai
{
    private $nip, $nama, $tgl_lahir, $departemen;
    protected $status;
    public $umur;

    public function __construct()
    {
        $this->status = "Aktif";
    }

    public function setData($nip, $nama, $tgl_lahir, $departemen)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->tgl_lahir = $tgl_lahir;
        $this->departemen = $departemen;
        $this->setUmur();
    }

    public function setUmur()
    {
        $this->umur = date("Y") - substr($this->tgl_lahir, 0, 4);
    }

    public function getData()
    {
        return [
            'nip' => $this->nip,
            'nama' => $this->nama,
            'tgl_lahir' => $this->tgl_lahir,
            'umur' => $this->umur,
            'departemen' => $this->departemen,
            'status' => $this->status
        ];
    }
}