<?php
header("Content-Type:application/json");
require "data.php";

$num = get();

echo json_encode($num);