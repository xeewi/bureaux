<?php 

function include_core(){
	foreach (glob("core/*.func.php") as $filename) {
		include $filename;
	}
}

include_core();