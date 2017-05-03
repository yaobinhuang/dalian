<?php
	header("content-type:text/html;charset=utf-8;");
	$value='dfkjdf';
	echo $value."<br/>";
	

	if (empty($value)) {
		echo'帅';
	}else{
		echo '很帅';
	}
	echo '<br>';
	$name=$value.'<br/>';
	$yao=&$value.'<br/>';
	$value="ppppp";
	echo$name.$yao;
	
	$x="3";
	$y="24";
	$z=&$x;
	$x=&$y;
	$y=&$z;
	


	echo$x.$y;
	
	
	
 ?>
