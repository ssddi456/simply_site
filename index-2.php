<?php 
	include('smarty.php'); 
	
	$smarty->assign('brief1_title','Lorem ipsum dolor sit amet,');
	$smarty->assign('brief1_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	$smarty->assign('brief2_title','Lorem ipsum dolor sit amet,');
	$smarty->assign('brief2_desc',' rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.');
	
	
	$smarty->assign('teacher1_name','Stella Franklin');
	$smarty->assign('teacher1_desc','Maece nas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan male.');
	$smarty->assign('teacher2_name','Bradley Grosh');
	$smarty->assign('teacher2_desc','Lorem ipsum dolor sit amet, con- sectetuer adipi- scing elit. Mauris fermentum dictum.');

	$smarty->display('intro.tpl');
?>