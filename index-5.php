<?php 
	include('smarty.php'); 
	
	$smarty->assign('company_name','business focus china');
	$smarty->assign('company_address','business focus china address');
	$smarty->assign('company_phone','123123123');
	$smarty->assign('company_fax','123123123');
	

	$smarty->display('contact.tpl');
?>