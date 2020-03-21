<?php

class Figura {
    private static $counter = 0;

    public static function getCounter() {
        return self::$counter;
    }

    protected $perimetru;
    protected $culoare;

    public function __construct($perimetru, $culoare) {
        $this->perimetru = $perimetru;
        $this->culoare = $culoare;
        self::$counter = self::$counter + 1;
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
        $perimetru = $this->calcPerim($latura);
        parent::__construct($perimetru, $culoare);
    }

    private function calcPerim($latura) {
        return $latura * 4;
    }

}

class Dreptunghi extends Figura {
    public function __construct($x, $y, $culoare) {
        $perimetru = $this->calcPerim($x, $y);
        parent::__construct($perimetru, $culoare);
    }

    private function calcPerim($x, $y) {
        return $x * 2 + $y * 2;
    }

}


$fig = new Patrat(14, 'red');
$fig = new Patrat(2, 'red');
$fig = new Dreptunghi(6, 7, 'red');


echo Figura::getCounter();
// Figura::hideColor();

// echo '<pre>';
// var_dump($fig);

// echo $fig->getPerimetru();

