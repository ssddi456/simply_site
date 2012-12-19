<?php 
	include('smarty.php'); 
	
	$smarty->assign('teacher1_name','Lorem ipsum dolor sit amet,');
	$smarty->assign('teacher1_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	$smarty->assign('teacher2_name','Lorem ipsum dolor sit amet,');
	$smarty->assign('teacher2_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	
	$smarty->display('teacher.tpl');
?>