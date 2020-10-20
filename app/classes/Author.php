<?php


class Author 
{ 
    // public $id;
    public $name;

    /**
     * Function construct to create an object author
     * 
     * @param [int] $_id        Unique id for the author
     * @param [string] $name    Name of the author 
     */
    public function __construct($_name) {
        // $this->id = $_id;
        $this->name = $_name;
    }


}
