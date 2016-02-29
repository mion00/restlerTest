<?php
class user {
	function index() {
    $result = new stdClass();
    $result->name = "test";
    $result->password = "test";
		return $result;
	}
}
