<?php


class Lenguaje
{
    private $idioma;
    private $lislang=[];

    public function __construct($idioma)
    {
        $this->idioma = $idioma;
        if ($idioma == 'es'){
            $this->lislang = Tools::getBaseEspaniol();
        }else{
            $this->lislang = Tools::getBaseIngles();
        }
    }
    public function get($palabra){
        return isset($this->lislang[$palabra])?$this->lislang[$palabra]:'';
    }
}