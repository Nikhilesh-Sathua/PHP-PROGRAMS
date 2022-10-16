<?php
class Nikhil
{
	public function getClassName(){
		return __class__;
	}
}
$obj = new Nikhil();
echo $obj->getClassName();
?>
