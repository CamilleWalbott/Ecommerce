<?php

namespace App\Taxes;

class Detector
{

    protected $seuil;
    public function __construct(float $seuil)
    {

        $this->seuil = $seuil;
    }
    public function detect(float $mount): bool
    {
        if ($mount < $this->seuil) {
            return false;
        }
        return true;
    }
}
