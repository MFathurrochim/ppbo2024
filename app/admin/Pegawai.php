<?php

class Pegawai {
    public int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekin(): bool {

        echo "{$this->nama} telah cek in.\n";
        return true;
    }

    public function cekOut(): bool {
        echo "{$this->nama} telah cek out.\n";
        return true;
    }

    public function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void {
        $this->no_hp = $no_hp;
    }
}

class Dosen extends Pegawai {
    public string $nidn;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, string $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan.\n";
    }
}

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, int $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function cuti(): void {
        // Implementasi logika cuti
        echo "{$this->nama} telah mengajukan cuti.\n";
    }
}


$dosen = new Dosen(123456, "Fathur Rochim", 81234567890, "Jl. Danau sentarum", "NIDN123");
$dosen->cekin();
$dosen->mengajar();
$dosen->cekOut();

$tenaga_kependidikan = new TenagaKependidikan(654321, "Zheyan", 81234567891, "Jl. Desa kapur", 5000000);
$tenaga_kependidikan->cekin();
$tenaga_kependidikan->cuti();
$tenaga_kependidikan->cekOut();
