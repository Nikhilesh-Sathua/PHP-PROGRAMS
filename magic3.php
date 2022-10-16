<?php
trait NIKHILESH{
	function cpgs(){
		echo __trait__;
		}
	}
	class ouat{
		use NIKHILESH;
		}
	$a = new ouat;
	$a->cpgs();
?>
