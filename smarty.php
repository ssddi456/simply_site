<?php
require 'smarty/libs/Smarty.class.php';

$smarty               = new Smarty();//设置各个目录的路径，这里是安装的重点
$smarty->template_dir = 'templates';
$smarty->compile_dir  = 'templates_c';
$smarty->config_dir   = 'config';
$smarty->cache_dir    = 'cache';

$smarty->caching = false;
$smarty->left_delimiter = '{#';
$smarty->right_delimiter = '#}';

$smarty->assign('index_page',  'index.php');
$smarty->assign('main_page',   'main.php');
$smarty->assign('course_page', 'course.php');
$smarty->assign('teacher_page','teachers.php');
$smarty->assign('contact_page','contact.php');
$smarty->assign('faq_page',    'faq.php');


$smarty->assign('banners',array());

$smarty->assign('short_about_us','Business Focus helps companies analyse English language skills needed by their staff. After a consultation session, a decision is made for the most appropriate training programme for your company’s specific needs. We deliver tailored and comprehensive English training, which focuses, on your company’s objectives and your staff’s language needs. We are dedicated to producing quality courses, which lead to positive goal-orientated results.');
$smarty->assign('company_profile','Our overall goal as we work with clients, is to improve their workplace performance by helping them to attain a higher standard of proficiency and confidence in their use of English. This then enables them to develop their business skills and to develop a more professional rapport with native English speaking clients.');
$smarty->assign('why_us','<p>Personalized and detailed training content focused on your needs.</p><p>Course report at the end of your English Course. </p><p>English level assessment test.</p><p>Experienced, effective, and professional instructors and trainers.</p><p>Certificate of Attendance on completion.</p>');
$smarty->assign('testimonial','"At the beginning of the training, I dare not speak out. And now I can express myself in English. I know there is still much space to improve and learning English is a continuous process."&nbsp;&nbsp;－ Alex Wu<br /><br />"Thanks for your help during the training Business Focus, and I appreciate your help. Although I still have much to improve in, I feel more confident using English now."&nbsp;&nbsp;－ Steffy Zhou');
?>