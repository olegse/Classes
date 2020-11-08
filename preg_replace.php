<?php


$name = "ugo sali";

function cap_all($m) {
	return strtoupper($m[0]);
}


echo preg_replace_callback( '/\b\w/', "cap_all", $name);
