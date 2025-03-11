<?php
include_once 'Pegawai.php';

class PegawaiKontrak extends Pegawai
{
    private $daftar_proyek = [], $total_proyek = 0, $total_durasi = 0, $proyek_terbaru = null;

    public function __construct($daftar_proyek = [])
    {
        $this->daftar_proyek = $daftar_proyek;
        $this->hitungStatistikProyek();
        $this->status = "Kontrak";
    }

    // Menghitung total proyek, total durasi, dan proyek terbaru
    public function hitungStatistikProyek()
    {
        $this->total_proyek = count($this->daftar_proyek);

        foreach ($this->daftar_proyek as $proyek) {
            $this->total_durasi += $proyek['durasi'];
        }

        if (!empty($this->daftar_proyek)) {
            $this->proyek_terbaru = end($this->daftar_proyek);
        }
    }

    // Override method getData dari class Pegawai
    public function getData()
    {
        return array_merge(parent::getData(), [
            'total_proyek' => $this->total_proyek,
            'total_durasi' => $this->total_durasi . " bulan",
            'proyek_terbaru' => $this->proyek_terbaru,
            'daftar_proyek' => $this->daftar_proyek
        ]);
    }
}