<?php

class IsoscelesTriangle extends Triangle {

    private $topAngle;
    private $bottomAngle;

    /**
     * Set the value of topAngle
     *
     * @return  self
     */ 
    public function setTopAngle($topAngle)
    {
        $this->topAngle = $topAngle;

        return $this;
    }

    /**
     * Set the value of bottomAngle
     *
     * @return  self
     */ 
    public function setBottomAngle($bottomAngle)
    {
        $this->bottomAngle = $bottomAngle;

        return $this;
    }

    public function getBiggestAngle() {

        if ($this->topAngle > $this->bottomAngle) {
            return  $this->topAngle;
        }else {
            $this->bottomAngle;
        }
    }

}