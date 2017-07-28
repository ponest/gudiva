<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'init';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* =======authentication=========*/
$route['auth'] = 'auth/index';
$route['auth/login'] = 'auth/login';
$route['auth/logout'] = 'auth/logout';
$route['auth/signup']='auth/signup';
$route['auth/register'] = 'auth/register';

/*===============INIT================*/

$route['olevel']='init/olevel_page';
$route['alevel']='init/alevel_page';
$route['olevel_topics']='init/olevel_topics';
$route['alevel_topics']='init/alevel_topics';
$route['start-topic']='init/start_topic';
$route['olevel_pp']='init/olevel_pp';
$route['alevel_pp']='init/alevel_pp';
$route['topics']='init/topics';
$route['questions']='init/questions';
$route['edu-tips']='init/tips';
$route['past-papers']='init/past_papers';
$route['hello']='init/qn';
//$route['login_admin']='init/login_admin';


/*================Admin=====================*/
$route['admin'] = 'admin/admin';
$route['admin/dashboard'] = 'admin/dashboard';

//------------Topics routes ------
$route['admin/topics'] = 'admin/topics/topics_list';
$route['admin/topic/view/(:any)'] = 'admin/topics/view/$1';
$route['admin/topic/create'] = 'admin/topics/create';
$route['admin/topic/edit/(:any)'] = 'admin/topics/edit/$1';
$route['admin/topic/delete/(:any)'] = 'admin/topics/delete/$1';

//------------Questions routes ------
$route['admin/questions'] = 'admin/questions/questions_list';
$route['admin/questions/create'] = 'admin/questions/create';
$route['admin/questions/edit/(:any)'] = 'admin/questions/edit/$1';

//------------Tips routes ------
$route['admin/tips'] = 'admin/tips';
$route['admin/tips/create'] = 'admin/tips/create';
$route['admin/tips/edit/(:any)'] = 'admin/tips/edit/$1';

//------------Past Papers routes ------
$route['admin/past_papers'] = 'admin/past_papers';
$route['admin/past_papers/create'] = 'admin/past_papers/create';
$route['admin/past_papers/edit/(:any)'] = 'admin/past_papers/edit/$1';



