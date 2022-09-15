<?php

namespace FarmClass;

use Exception;

class Farm
{
    public $cow = 10;
    public $chicken = 20;
    public $oneCow = [];
    public $oneChicken = [];

    public function __construct()
    {

    }

    public function indexing($animals,$arr)
    {
        if($animals<0)
        {
            throw new Exception('Животных не может быть меньше нуля!');
        }
        for($i=0; $i<$animals; $i++)
        {
            $arr[] = $i + 1;
        }
    }

}
