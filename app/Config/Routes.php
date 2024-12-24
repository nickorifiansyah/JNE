<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Auth::home');
$routes->get('/login', 'Auth::login');
$routes->get('/forgot', 'Auth::forgot');
$routes->get('/profile', 'Auth::profile');
$routes->get('/favorite', 'Auth::favorite');
$routes->get('/self', 'Auth::self');
$routes->get('/personaldata', 'Auth::personaldata');
$routes->get('/employee', 'Auth::employee');
$routes->get('/pnc', 'Auth::pnc');
$routes->get('/chart', 'Auth::chart');
$routes->get('/ETH', 'Auth::ETH');
$routes->get('/people', 'Auth::people');
$routes->get('/compensation', 'Auth::compensation');
$routes->get('/history', 'Auth::history');
$routes->get('/personal', 'Auth::personal');
$routes->get('/leave-absence', 'Auth::leaveAbsence');
$routes->get('/attendance-overtime', 'Auth::attendanceOvertime');
$routes->get('/LAIP', 'Auth::LAIP');
$routes->get('/LH', 'Auth::LH');
$routes->get('/long_leave', 'Auth::long_leave');
$routes->get('/izin_upah_bayar', 'Auth::izin_upah_bayar');
$routes->get('/LA', 'Auth::LA');
$routes->get('/absence_app', 'Auth::absence_app');
$routes->get('/overtime', 'Auth::overtime');
$routes->get('/summary', 'Auth::summary');
$routes->get('/roster', 'Auth::roster');
$routes->get('/attendance_overtime', 'Auth::attendance_overtime');
$routes->get('/core_system_manager', 'Auth::core_system_manager');
$routes->get('/personal_manager', 'Auth::personal_manager');
$routes->get('/display_personel_data', 'Auth::display_personel_data');
$routes->get('/recruitment', 'Auth::recruitment');
$routes->get('/candidate_data_center', 'Auth::candidate_data_center');
$routes->get('/data_center', 'Auth::data_center');
$routes->get('/request_list', 'Auth::request_list');
$routes->get('/request_detail', 'Auth::request_detail');
$routes->get('/approval_tracking', 'Auth::approval_tracking');
$routes->get('/selection_list', 'Auth::selection_list');
$routes->get('/selection_detail', 'Auth::selection_detail');
$routes->get('/seletion_candidate', 'Auth::seletion_candidate');
$routes->get('/user_group', 'Auth::user_group');