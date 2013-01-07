<?php 
	include('smarty.php'); 
	$faqs = array(
						array('title'=>'Where will our training take place?', 'descript'=>'Normally Business Focus delivers training at a client\'s premises at a time convenient for the trainees.'),
						array('title'=>'How long are training sessions?', 'descript'=>'A typical training session lasts for 2 hours. However, Business Focus always tailors session length to suit clients\' individual needs and we are happy to arrange longer or shorter sessions if we believe after conducting our Needs Analysis with you that this would be more appropriate to your learning needs.'),
						array('title'=>'How long does each training programme last?', 'descript'=>'The average duration of a Business Focus corporate training programme is 50-60 hours. We can however also arrange programmes of length depending on client preferences.'),
						array('title'=>'How do you organize trainees\'classes?', 'descript'=>'Business Focus utilizes a placement test to assess the trainees real English. The Oxford Placement Test assesses the students in reading and listening. This allows us to stream group classes so that all learners have similar weaknesses and strengths, thus allowing the class to progress together.')
					);
	$smarty->assign('faqs', $faqs);
	$smarty->display('faq.tpl');
?>