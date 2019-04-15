<?php
	$num = 12;
	function get() {
		global $num;
		return $num;
	}

	function put($n) {
		global $num;
		$num = $n;
	}