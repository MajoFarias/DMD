<?php 
require_once("easyCRUD.class.php");
class User  Extends Crud {
	protected $table = 'users';
	protected $pk	 = 'id';
}
?>