<?php
class Puna{
    private $ID; //e kemi shtu Id direkt ne db me AutoIncrement
    private $JobTitle;
    private $Orari;
    private $Lokacioni;
    private $Detajet;
    private $PozitaTeHapura;
   

    public function __construct($e, $m, $em, $d, $gj){
        $this->JobTitle=$e;
        $this->Orari=$m;
        $this->Lokacioni=$em;
        $this->Detajet=$d;
        $this->PozitaTeHapura=$gj;
    
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


    public function __toString(){
        return "Puna ".$this->JobTitle." me ".$this->PozitaTeHapura." pozita te hapura";
    }
}
?>