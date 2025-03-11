<?php
class MataKuliah
{
    private $kode, $nama;

    public function setData($kode, $nama)
    {
        $this->kode = $kode;
        $this->nama = $nama;
    }

    public function getData()
    {
        return [
            $this->kode,
            $this->nama
        ];
    }
}