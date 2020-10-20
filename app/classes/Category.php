<?php

class Category 
{ 
    // public $id;
    public $name;

    /**
     * Function construct to create an object category
     *
     * @param [int] $_id        Unique id of the category
     * @param [string] $_name   Name of category
     */
    public function __construct($_name) {
        // $this->id = $_id;
        $this->name = $_name;
    }

    
}
