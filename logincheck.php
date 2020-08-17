<?php
  $uname=$_GET["uname"];
  $pwd=$_GET["pwd"];
  if($uname=="kiet" && $pwd=="kiet")
  {
	  echo "Welcome to KIET";
  }
  else
  {
	  echo "Please login again";
  }
?>