<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$user = (isset($_SESSION['user']) && !empty($_SESSION['user'])) ? $_SESSION['user'] : false;
$page_title = (isset($title) && !empty($title)) ? $title : "DMD";
$is_home_page = false;


 ?>