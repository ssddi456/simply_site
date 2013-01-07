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

?>