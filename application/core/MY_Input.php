<?php

class MY_Input extends CI_Input {
	
	function __construct()
	{
		parent::__construct();
	}
	
    function is_post()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }
}