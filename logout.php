<?php
session_start();
	session_unset("tb_login");
	session_destroy();
	header("Location: landing.php");
	?>