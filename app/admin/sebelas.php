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
        echo "{$this->nama}  sedang mengajar perkuliahan.\n";
    }
}


$dian = new Dosen(198411132015041001, "Dian Prawira", 62111111, "Jln Purnama", "0013118405");

$dian->mengajar();
