<?php
class stopWatch{
    private $startTime;
    private $endTime;
    public function getStartTime(){
        return $this->startTime;
    }
    public function setEndTime(){
        return $this->endTime;
    }
    public function start(){
        $this->startTime= microtime(true);
    }
    public function stop(){
        $this->endTime= microtime(true);
    }
    public function getElapsedTime(){
        return $this->endTime - $this->startTime;
    }
}
