<?php
session_start();
echo session_id();
$_SESSION["name"] = "kaneko";
$_SESSION["age"] = 20;
