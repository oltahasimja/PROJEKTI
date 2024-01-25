<?php
class Puna{
    private $ID; //e kemi shtu Id direkt ne db me AutoIncrement
    private $Img;
    private $JobTitle;
    private $Orari;
    private $Lokacioni;
    private $Detajet;
    private $PozitaTeHapura;
    private $Pershkrimi;

    public function __construct($i,$e, $m, $em, $d, $gj,$p){
        $this->Img=$i;
        $this->JobTitle=$e;
        $this->Orari=$m;
        $this->Lokacioni=$em;
        $this->Detajet=$d;
        $this->PozitaTeHapura=$gj;
        $this->Pershkrimi=$p;
    }
    public function getImg(){
        return $this->Img;
    }
    public function setImg($e){
        $this->Img = $e;
    }
    public function getJobTitle(){
        return $this->JobTitle;
    }
    public function setJobTitle($e){
        $this->JobTitle = $e;
    }

    public function getOrari(){
        return $this->Orari;
    }
    public function setOrari($e){
        $this->Orari = $e;
    }

    public function getLokacioni(){
        return $this->Lokacioni;
    }
    public function setLokacioni($e){
        $this->Lokacioni = $e;
    }

    public function getDetajet(){
        return $this->Detajet;
    }
    public function setDetajet($e){
        $this->Detajet = $e;
    }

    public function getPozitaTeHapura(){
        return $this->PozitaTeHapura;
    }
    public function setPozitaTeHapura($gj){
        $this->PozitaTeHapura = $gj;
    }

    public function getPershkrimi(){
        return $this->Pershkrimi;
    }
    public function setPershkrimi($gj){
        $this->Pershkrimi = $gj;
    }

    public function __toString(){
        return "Puna ".$this->JobTitle." me ".$this->PozitaTeHapura." pozita te hapura";
    }
}
?>