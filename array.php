<?php
//Array is a special kind of variable
//that can have/hold multiple values of
#same kind or different kind. 
//1. single dimension
//2. multi dimension
//3. associative array
  $values=array(12,23,45,67,89);
  echo var_dump($values)."<br>";
  for($i=0;$i<count($values) ;$i++)
  {
	  echo $i."=".$values[$i]."<br>";
  }
  $asovalues=array("delhi"=>"30","muradnagar"=>23,"usa"=>45);
  echo var_dump($asovalues)."<br>";
  foreach($asovalues as $key => $value)
  {
	  echo $key."=>".$value."<br>";
  }
  $multiarray=array(
  array(12,34,65,67),
  array("Ravi","rahul","kiet","mca")
  );
  echo var_dump($multiarray)."<br>";
?>