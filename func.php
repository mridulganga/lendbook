<?php 
session_start();
include_once ("mods/db.php");
include ("mods/html.php");

	function redirect($url){
		echo "<script type='text/javascript'>window.location.href = '".$url."';</script>";
        exit();
	}
	
	function newline($no=1){
		$html="";
		while($no){
			$html.="<br/>";
			$no--;
		}
		return $html;
	}
	
	function titlePrint($title){
		$html = '<h2>'.$title.'</h2><br><br>';	//needs improvement
		return $html;
	}
	
	function isLoggedin(){
		if(isset($_SESSION["name"]))
			return TRUE;
		else
			return False;
	}
	
	function getCurrentUser(){
		return $_SESSION["name"];
	}
	
	function getCurrentEmail(){
		return $_SESSION["email"];
	}
	
	
	
?>