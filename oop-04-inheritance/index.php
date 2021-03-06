<?php

class Figura {
    protected $perimetru;
    protected $culoare;

    // private $perimetru;
    // private $culoare;

    public function __construct($perimetru, $culoare) {
        $this->perimetru = $perimetru;
        $this->culoare = $culoare;
    }

    public function setPerimetru($perimetru) {
        $this->perimetru = $perimetru;
    }

    public function getPerimetru() {
        return $this->perimetru;
    }

    public function setCuloare($culoare) {
        $this->culoare = $culoare;
    }

    public function getCuloare() {
        return $this->culoare;
    }
}

class Patrat extends Figura {
    public function __construct($latura, $culoare) {
        $this->perimetru = $this->calcPerim($latura);
        $this->culoare = $culoare;
        // parent::__construct($perimetru, $culoare);
    }

    private function calcPerim($latura) {
        return $latura * 4;
    }

    public function getPerimetru() {
        return $this->perimetru;
    }
}


$fig = new Patrat(14, 'red');


echo '<pre>';
var_dump($fig);

echo $fig->getPerimetru();

