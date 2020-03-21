<?php 
class Person {

    private $nume;
    private $prenume;

    public function __construct($nume, $prenume) {
        $this->nume = $nume;
        $this->prenume = $prenume;
    }

    public function getFullName() {
        return $this->nume . ' ' . $this->prenume;
    }

}

$gigel = new Person('Gigel', 'Gica');
$jack = new Person('Jack', 'Gica');

echo $gigel->getFullName();
echo $jack->getFullName();

$persoane = [];
for ($i = 0; $i < 100; $i++) {
    $persoane[$i] = new Person('Gigel' . $i, 'Gica');
}

echo '<pre>';
var_dump($persoane);