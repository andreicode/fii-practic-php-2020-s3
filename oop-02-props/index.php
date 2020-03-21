<?php 
class Person {

    public static $counter = 0;
    public static $hidePrenume = 0;

    public static function getCounter() {
        return self::$counter;
    }

    public static function setHidePrenume($status) {
        self::$hidePrenume = $status;
    }

    private $nume;
    private $prenume;

    public function __construct($nume, $prenume) {
        $this->nume = $nume;
        $this->prenume = $prenume;
        self::$counter = self::$counter + 1;
    }

    public function getFullName() {
        if (self::$hidePrenume === 0) {
            return $this->nume . ' ' . $this->prenume;
        } else {
            return $this->nume;
        }
    }

    public function setName($nume) {
        $this->nume = $nume;
    }

    public function getName() {
        return $this->nume;
    }

}
// echo Person::$counter;
// $gigel = new Person('Gigel', 'Gica');
// echo '<br>';
// echo $gigel->getFullName();
// $gigel->setName('Jack');
// echo '<br>';
// echo $gigel->getFullName();
// echo '<br>';
// echo Person::$counter;

// echo Person::$counter;
// echo '<br>';
// $gigel = new Person('Gigel1', 'Gica');
// echo Person::$counter;
// echo '<br>';
// $gigel = new Person('Gigel2', 'Gica');
// echo Person::$counter;
// echo '<br>';

// echo Person::getCounter();
// echo '<br>';
// $gigel = new Person('Gigel1', 'Gica');
// echo Person::getCounter();
// echo '<br>';


// $gigel = new Person('Gigel1', 'Gica');
// echo $gigel->getFullName();
// echo '<br>';
// Person::setHidePrenume(1);
// echo $gigel->getFullName();
// echo '<br>';
