<?php 
	include('smarty.php'); 
	
	$smarty->assign('faq1_title','Lorem ipsum dolor sit amet,');
	$smarty->assign('faq1_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	
	$smarty->display('faq.tpl');
?>