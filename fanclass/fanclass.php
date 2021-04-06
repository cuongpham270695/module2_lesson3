<?php
class Fan{
   private int $speed;
   private bool $on;
   private float $radius;
   private string $color;
   public function __construct(){
       $this->slow = 1;
       $this->medium=2;
       $this->fast=3;
       $this->speed=$this->slow;
       $this->on=false;
       $this->radius=5;
       $this->color="blue";
   }
   public function setSpeed(int $speed):void{
       $this->speed = $speed;
   }
   public function getSpeed():int{
       return $this->speed;
   }
   public function setOn(bool $on):void{
       $this->on = $on;
   }
   public function getOn():bool{
       return $this->on;
   }
   public function setRadius(float $radius):void{
       $this->radius=$radius;
   }
   public function getRadius():float{
       return $this->radius;
   }
   public function setColor(string $color):void{
       $this->color =$color;
   }
   public function getColor():string{
       return $this->color;
   }
   public function toString(){
       if($this->on){
           echo "Fan is on: Speed = " . $this->getSpeed(). ". Color = ".$this->getColor().". Radius = ".$this->getRadius();
       }else{
           echo "Fan is off. Color = ".$this->getColor().". Radius = ".$this->getRadius();
       }
   }
}
