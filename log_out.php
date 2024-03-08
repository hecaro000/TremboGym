<?php

	require "initdb.php";
	unset($_SESSION["user_in"]);
	header('Location: /index.php');

?>