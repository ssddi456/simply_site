<?php 
	include('smarty.php'); 
	include('db.php');
	
	$sql = "SELECT * FROM T_TEACHER_INFO limit 2";
	$result = mysql_query($sql);
	$teachers = array();
	
	while( $row = mysql_fetch_array($result) ){
		array_push( $teachers, array('name'=>$row['name'], 'descript'=>$row['descript'], 'pic'=>$row['pic']) );
	}
	mysql_close($conn);
	
	$smarty->assign('short_about_us_pic','images/pic2_3.gif');
	$smarty->assign('short_about_us','Business Focus helps companies analyse the English language skills needed by their staff. After a consultation session, a decision is made for the most appropriate training programme for your company’s specific needs. We deliver tailored and comprehensive English training, which focuses, on your company’s objectives and your staff’s language needs. We are dedicated to producing quality courses, which lead to positive goal-orientated results.');
	$smarty->assign('company_profile','Our overall goal as we work with clients, is to improve their workplace performance by helping them to attain a higher standard of proficiency and confidence in their use of English. This then enables them to develop their business skills and to develop a more professional rapport with native English speaking clients.');

	$smarty->assign('pic1', 'left_keys_t.jpg');
	$smarty->assign('pic2', 'left_keys_m.jpg');

	$smarty->assign('teacher',$teachers);
	$smarty->display('intro.tpl');
?>
