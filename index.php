<?php

include("user.class.php");

if(!isset($_COOKIE['user'])){
	setcookie("user", base64_encode(serialize(new User('sk4'))));
} else {
	unserialize(base64_decode($_COOKIE['user']));
}

echo "This is a beta test for new cookie handler\n";