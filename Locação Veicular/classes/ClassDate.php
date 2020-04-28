<?php
class ClassDate{
    private $entryDate;
    private $departureDate;
    private $dateDiff;
    #Prices
    private $yearValue=15000;
    private $monthValue=1800;
    private $dayValue=60;
    private $hourValue=5;

    #Construct
    public function __construct($entryFinal,$departureFinal)
    {
        $this->entryFinal=new DateTime($entryFinal, new DateTimeZone("America/Sao_Paulo"));
        $this->departureFinal=new DateTime($departureFinal, new DateTimeZone("America/Sao_Paulo"));
        $this->dateDiff=$this->entryFinal->diff($this->departureFinal);
    }

    #Get location
    public function getLocation()
    {
        $finalValue=0;
        $msg="";

        if($this->dateDiff->y > 0){
            $finalValue+=$this->dateDiff->y * $this->yearValue;
            $msg.=" ".$this->dateDiff->y." years";
        }

        if($this->dateDiff->m > 0){
            $finalValue+=$this->dateDiff->m * $this->monthValue;
            $msg.=" ".$this->dateDiff->m." month";
        }

        if($this->dateDiff->d > 0){
            $finalValue+=$this->dateDiff->d * $this->dayValue;
            $msg.=" ".$this->dateDiff->d." days";
        }

        if($this->dateDiff->h > 0){
            $finalValue+=$this->dateDiff->h * $this->hourValue;
            $msg.=" ".$this->dateDiff->h." hours";
        }

        if($this->dateDiff->i > 30){
            $finalValue+=$this->hourValue;
            $msg.=" ".$this->dateDiff->i." minutes";
        }

        return "
            <h1>Diária</h1><hr>
            Você selecionou o período de {$msg} <br>
            Você deverá pagar: <br>
            <strong>{$finalValue}</strong>,00
        ";
    }
}