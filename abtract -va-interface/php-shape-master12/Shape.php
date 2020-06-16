<?php
abstract class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract function calculateArea();
    abstract function calculatePerimeter();
    public function maxArea($arr)
    {
        $max = $arr[0]["Area"];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i]["Area"] > $max) {
                $max = $arr[$i]["Area"];
            }
        }
        return " maxArea = $max";
        // return "$arr[$i]['Name'] có diện tích lớn nhất là: $max";
    }
    public function MinPerimeter($arr)
    {
        $min = $arr[0]["Pre"];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i]["Pre"] < $min) {
                $min = $arr[$i]["Pre"];
            }
        }
        return "Min Perimeter = $min";
        // return "$arr[$i]['Name'] có chu vi nhỏ nhất là: $min";
    }
    public function Search($arr, $name)
    {
        $check = false;
        for ($i = 0; $i < count($arr); $i++) {
            if ($name === $arr[$i]["Name"]) {
                $check = true;
                $AreaSearch = $arr[$i]["Area"];
                $PreSearch = $arr[$i]["Pre"];
         }
      
    }
    if($check === true){
        return "Có $name có diện tích = $AreaSearch, chu vi  = $PreSearch";
    }
    else{
        return "Không có";
    }
}
}
