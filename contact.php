<?php 
	include('smarty.php'); 
	
  $smarty->assign('company_pic','images/pic5_3.gif');
	$smarty->assign('company_name','Business Focus');
	$smarty->assign('company_address','my address of company');
	$smarty->assign('company_phone','+86 12345678');
	$smarty->assign('company_fax','+86 12345678');
	
	$smarty->assign('pic1', 'left_mails_t.jpg');
	$smarty->assign('pic2', 'left_mails_m.jpg');

	$smarty->display('contact.tpl');
?>