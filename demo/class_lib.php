<?php
class Person {
    public $name;

    public function __construct($personName)
    {
        $this->name = $personName;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }

    function getName()
    {
        return $this->name;
    }
}
?>