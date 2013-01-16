<?php
class main extends spController
{
	function index() {
		header("Content-type: text/html; charset=utf-8");
		echo "你迷路了。";
	}
}