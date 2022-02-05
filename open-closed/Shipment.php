<?php

interface Shipment {
    public function calculateFee();
}

class PastiAntar implements Shipment {

    private $weight;
    private $height;
    private $lenght;
    private $width;
    private $distance;

    public function __construct($weight = 1, $height = 1, $lenght = 1, $width = 1, $distance = 10)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->lenght = $lenght;
        $this->width = $width;
        $this->distance = $distance;

    }

    public function calculateFee() {

        $dimension = ($this->weight / 10) * ($this->height * $this->lenght * $this->width);

        $totalFee =  $dimension * 1000;
        
        if ($this->distance > 100) {
            $totalFee += $this->distance*2000;
        } 

        return  $totalFee;
    }  

}

class CepatKirim implements Shipment {

    private $weight;
    private $height;
    private $lenght;
    private $width;
    private $shippingRatio;

    public function __construct($weight = 1, $height = 1, $lenght = 1, $width = 1, $shippingRatio = 1)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->lenght = $lenght;
        $this->width = $width;
        $this->shippingRatio = $shippingRatio;

    }

    public function calculateFee() {

        return ($this->weight / 10) * ($this->height * $this->lenght * $this->width) * ($this->shippingRatio * 50000);

    }  

}


