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

	$smarty->assign('pic1', 'left_keys_t.jpg');
	$smarty->assign('pic2', 'left_keys_m.jpg');

	$smarty->assign('teacher',$teachers);

	$smarty->display('intro.tpl');
?>
