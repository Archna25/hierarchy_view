<?php

Class Home extends Controller
{
	function index()
	{
		//$data['page_title']= "Home";
		$DB = new Database();
		show($DB->read("select * from algo"));
		$this->view("home",$DB);
	}

}