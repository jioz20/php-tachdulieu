<?php
	

	
	function v_arr($l)
	{
		echo '<pre>';
		print_r($l);
		echo '</pre>';
	} 


	$html = file_get_contents('https://www.thegioididong.com/laptop/dell-inspiron-3576-p63f002n76f');
	
	foreach($html->find('img') as $element)
	{
		echo '<img src="'.$element->src.'" /><br>';
	}
 ?>
