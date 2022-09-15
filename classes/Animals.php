<?php
namespace AnimalsClass;
require 'classes/farm.php';
use Exception;
use FarmClass\Farm;

class Animals extends Farm
{
    public $milk;
    public $egs;

    public function __construct()
    {
        parent::__construct();
        try
        {
            $this->indexing($this->cow, $this->oneCow);
            $this->indexing($this->chicken, $this->oneChicken);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function milk()
    {
        for($i=0; $i<$this->cow; $i++)
        {
            $this->milk += mt_rand(8,12);
        }
    }

    public function egs()
    {
        for($i=0; $i<$this->chicken; $i++)
        {
            $this->egs += mt_rand(0,1);
        }
    }

    public function setCow($cow)
    {
        $this->cow += $cow;
    }

    public function setChicken($chicken)
    {
        $this->chicken += $chicken;
    }

    public function for()
    {
        for($i=0; $i<7; $i++)
        {
            $this->milk();
            $this->egs();
            echo $this->milk.' молока'.PHP_EOL;
            echo $this->egs.' яиц'.PHP_EOL;
        }
        echo 'Общее кол во молока '.$this->milk.PHP_EOL;
        echo 'Общее кол во яиц '.$this->egs.PHP_EOL;
    }

}