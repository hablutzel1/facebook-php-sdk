<?php

// TODO find the right place to destroy the session so getUser() gets  unavailable after a logout
session_start();
$session_destroy = session_destroy();

header("Location: index.php");