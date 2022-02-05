<?php

class Triangle {

    private $alphaAngle;
    private $gammaAngle;
    private $betaAngle;



    /**
     * Set the value of alphaAngle
     *
     * @return  self
     */ 
    public function setAlphaAngle($alphaAngle)
    {
        $this->alphaAngle = $alphaAngle;

        return $this;
    }

    /**
     * Set the value of gammaAngle
     *
     * @return  self
     */ 
    public function setGammaAngle($gammaAngle)
    {
        $this->gammaAngle = $gammaAngle;

        return $this;
    }

    /**
     * Set the value of betaAngle
     *
     * @return  self
     */ 
    public function setBetaAngle($betaAngle)
    {
        $this->betaAngle = $betaAngle;

        return $this;
    }

    public function getBiggestAngle() {

        if ($this->alphaAngle > $this->gammaAngle && $this->alphaAngle > $this->betaAngle) {
            return  $this->alphaAngle;
        }else if ($this->gammaAngle > $this->betaAngle) {
            return  $this->gammaAngle;
        }else {
            $this->betaAngle;
        }
    }
}