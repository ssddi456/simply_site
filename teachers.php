<?php 
	include('smarty.php'); 
	include('db.php'); 
	
	$sql = "SELECT * FROM T_TEACHER_INFO_EN";
	$result = mysql_query($sql);   
	$teachers = array();
	while( $row = mysql_fetch_array($result) ){
		array_push( $teachers,
		 	array(
		 		'recordId'=>$row['recordId'],
		 		'name'=>$row['name'], 
		 		'descript'=>$row['descript'], 
		 		'pic'=>$row['pic']) );
	}
	mysql_close($conn);

	$smarty->assign('pic1', 'left_teachers_t.jpg');
	$smarty->assign('pic2', 'left_teachers_m.jpg');

	$smarty->assign('teachers', $teachers);
	$smarty->display('teacher.tpl');
?>
