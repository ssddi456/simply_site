<?php 
	include('smarty.php'); 
	
	$smarty->assign('courser1_name','Lorem ipsum dolor sit amet,');
	$smarty->assign('courser1_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	$smarty->assign('courser2_name','Lorem ipsum dolor sit amet,');
	$smarty->assign('courser2_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	$smarty->assign('courser3_name','Lorem ipsum dolor sit amet,');
	$smarty->assign('courser3_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	$smarty->assign('courser4_name','Lorem ipsum dolor sit amet,');
	$smarty->assign('courser4_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	
	$smarty->display('course.tpl');
?>