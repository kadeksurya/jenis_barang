<?php

require "inven.php";

$item = new Inven();

$delete = $item->delete($_GET['id']);

// if($create === TRUE)
header("location: index.php");

