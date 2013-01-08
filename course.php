<?php 
	include('smarty.php'); 
	include('db.php'); 
	
	$sql = "SELECT * FROM T_COURSER_INFO_EN";
	$result = mysql_query($sql);   
	$teachers = array();
	while( $row = mysql_fetch_array($result) ){
		array_push( $teachers, array('recordId'=> $row['recordId'], 'name'=>$row['name'], 'descript'=>$row['descript'], 'pic'=>$row['pic']) );
	}
	mysql_close($conn);
	
	$smarty->assign('pic1', 'left_stamp_t.jpg');
	$smarty->assign('pic2', 'left_stamp_m.jpg');

	$smarty->assign('courses', $teachers);
	$smarty->display('course.tpl');
?>