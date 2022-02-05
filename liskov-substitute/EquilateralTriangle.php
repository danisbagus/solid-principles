<?php

class EquilateralTriangle extends Triangle{

    private $angle;

    /**
     * Set the value of angle
     *
     * @return  self
     */ 
    public function setAngle($angle)
    {
        $this->angle = $angle;

        return $this;
    }

    public function getBiggestAngle() {
        return  $this->angle;
    }
}