<?php

class Segitiga {
    private $alas, $tinggi;
    function setAlas($a){
        $this->alas = $a;
    }
    function setTinggi($t){
        $this->tinggi = $t;
    }
    function getAlas(){
        return $this->alas;
    }
    function getTinggi(){
        return $this->tinggi;
    }
    function luas(){
        return ($this->alas * $this->tinggi)/2;
    }
}


class SegitigaSikuSiku extends Segitiga {

    function sisiMiring(){
        return sqrt(pow($this->getAlas(), 2) + pow($this->getTinggi(), 2));
    }
    function keliling(){
        return $this->getAlas() + $this->getTinggi() + $this->sisiMiring();
    }
}


class SegitigaSamaKaki extends Segitiga {
    private $kaki;
   
    function setSisi($alas, $kaki){
        $this->kaki = $kaki;
        $this->setAlas($alas);
        $this->setTinggi(sqrt(pow($kaki, 2) - pow($alas / 2, 2)));
    }
    function getKaki(){
        return $this->kaki;
    }
    function keliling(){
        return $this->getAlas() + (2 * $this->kaki);
    }
}


class SegitigaSamaSisi extends Segitiga {
    private $sisi;
    
    function setSisi($s){
        $this->sisi = $s;
        $this->setAlas($s);
        $this->setTinggi(($s * sqrt(3)) / 2);
    }
    function getSisi(){
        return $this->sisi;
    }
    function keliling(){
        return 3 * $this->sisi;
    }
}