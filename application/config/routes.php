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
$route['admin/tip_view']='init/tip_view';
$route['admin/tip_edit']='init/tip_edit';
$route['new']='init/new_homepage';

//$route['login_admin']='init/login_admin';

/*================Admin=====================*/
$route['admin/dashboard'] = 'admin/admin';

//------------Topics routes ------
$route['admin/topics'] = 'admin/topics/topics_list';
$route['admin/topic/view/(:any)'] = 'admin/topics/view/$1';
$route['admin/topic/create'] = 'admin/topics/create';
$route['admin/topic/edit/(:any)'] = 'admin/topics/edit/$1';
$route['admin/topic/delete/(:any)'] = 'admin/topics/delete/$1';

//------------Questions routes ------
$route['admin/questions'] = 'admin/questions/questions_list';
$route['admin/question/view/(:any)'] = 'admin/questions/view/$1';
$route['admin/question/create'] = 'admin/questions/create';
$route['admin/question/edit/(:any)'] = 'admin/questions/edit/$1';
$route['admin/question/delete/(:any)'] = 'admin/questions/delete/$1';

//------------Tips routes ------
$route['admin/tips'] = 'admin/tips/tips_list';
$route['admin/tip/view/(:any)'] = 'admin/tips/view/$1';
$route['admin/tip/create'] = 'admin/tips/create';
$route['admin/tip/edit/(:any)'] = 'admin/tips/edit/$1';
$route['admin/tip/delete/(:any)'] = 'admin/tips/delete/$1';

//------------Past Papers routes ------
$route['admin/pastpapers'] = 'admin/pastpapers/pastpapers_list';
$route['admin/pastpaper/view/(:any)'] = 'admin/pastpapers/view/$1';
$route['admin/pastpaper/create'] = 'admin/pastpapers/create';
$route['admin/pastpaper/edit/(:any)'] = 'admin/pastpapers/edit/$1';
$route['admin/pastpaper/delete/(:any)'] = 'admin/pastpapers/delete/$1';


// user groups routes
$route['admin/user-groups'] = 'admin/userGroups';
$route['admin/user-groups/create'] = 'admin/userGroups/create';
$route['admin/user-groups/edit/(:any)'] = 'admin/userGroups/edit/$1';
$route['admin/user-groups/delete/(:any)'] = 'admin/userGroups/delete/$1';

// users routes
$route['admin/users'] = 'admin/users';
$route['admin/users/create'] = 'admin/users/create';
$route['admin/users/edit/(:any)'] = 'admin/users/edit/$1';
$route['admin/users/delete/(:any)'] = 'admin/users/delete/$1';


