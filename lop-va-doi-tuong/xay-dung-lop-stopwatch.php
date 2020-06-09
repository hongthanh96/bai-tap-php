<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
class StopWatch{
    private $startTime;
    private $endTime;
    public function start(){
        $this->startTime = date("h:i:s");
    }
    public function getStart(){
        return $this->startTime;
    }
    public function stop(){
        $this->endTime = date("h:i:s");
    }
    public function getStop(){
        return $this->endTime;
    }
    function getElapsedTime(){
        return microtime($this->stop() - $this->start());
    }
}
$stopwatch = new StopWatch;
$stopwatch->start();
echo $stopwatch->getStart()."<br>";
$stopwatch->stop();
echo $stopwatch->getStop()."<br>";
echo $stopwatch->getElapsedTime();




?>