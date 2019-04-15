<?php
header("Content-Type:application/json");
require "data.php";

if(!empty($_PUT['num']))
{
  echo json_encode($_PUT['num']);
  put($_PUT['num']);
  
}
else
{
  response(400,"Invalid Request",NULL);
}
