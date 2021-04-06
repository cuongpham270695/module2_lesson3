<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    public function getDiscriminant(){
        $delta = $this->b*$this->b - 4* $this->a * $this->c;
        return $delta;
    }
    public function findRoot(){
        $delta= $this->b*$this->b - 4* $this->a * $this->c;
        $x1=(-($this->b)-sqrt($delta)/2/$this->a);
        $x2=(-($this->b)+sqrt($delta)/2/$this->a);
        if($delta<0){
            echo "The equation has not root";
        }
        else if($delta==0){
            echo "The equation has 1 root: ". $x1 ;
        }
        else{
            echo "The equation has 2 roots: " .$x1 . " and " .$x2;
        }
    }
}
