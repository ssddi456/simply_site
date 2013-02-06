<?php 
	include('smarty.php'); 
	
  $smarty->assign('company_pic','images/pic5_3.gif');

	$smarty->assign('contacts',array( 
		array(
			'name' => 'Khalid Ismail (General Manger)', 
			'email' => 'Khalid@businessfocuschina.com', 
			'phone' => '028 85591084   (9:00 am-5:00 pm)',
			'mob' => '+86 13550115426',
		),array(
			'name' => 'Zoe Zhao', 
			'email' => 'Zoe@businessfocuschina.com', 
			'mob' => '+86 18628280530',
		)));
	
	$smarty->assign('pic1', 'left_mails_t.jpg');
	$smarty->assign('pic2', 'left_mails_m.jpg');

	$smarty->display('contact.tpl');
?>