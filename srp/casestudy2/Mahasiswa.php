<?php

class Mahasiswa
{
    private $nim;
    private $nama;

    public function __construct($nim, $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }
}
