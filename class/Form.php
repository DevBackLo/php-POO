<?php
class Form
{
    protected $data;
    public $surround = 'div';

    public function __construct($data=array()){
        $this->data = $data;
    }
    protected function surround($html)
    {
        // Dans ce morceau de code, on met des accolades afin que les propriétées soient interprétées par les doubles quotes.
        return "<{$this->surround}>{html}</{$this->surround}>";
    }
    protecded function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    public function imput($name)
    {
        return $this->surround(
            '<input type="text" name="' .$name .'" value="'. $this->getValue($name) .'">');
        
    }
    public function imputPS($name)
    {
        return $this->surround('
            <input type="password" name="' .$name
        ')
    }
}