<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['blog-details/(:any)/(:any)'] = 'Home/blog_details/$1/$2';
$route['initiatives-details/(:any)/(:any)'] = 'Home/initiatives_details/$1/$2';

$route['policy/(:any)'] = 'Home/policy/$1';
$route['about'] = 'Home/about';
$route['thankyou'] = 'Home/thankyou';
$route['contact'] = 'Home/contact';
$route['blogs'] = 'Home/blog';
$route['mentors'] = 'Home/mentors';
$route['join-us'] = 'Home/join_us';
$route['mentee-registration'] = 'Home/mentee_registration';
$route['mentor-registration'] = 'Home/mentor_registration';
$route['initiatives'] = 'Home/initiatives';
$route['mentee-login'] = 'Home/mentee_login';
$route['profile'] = 'Home/profile';
$route['forgot-password'] = 'Home/forgot_password';

// $route['newsletter-pdf'] = 'Home/newsletter_pdf';
$route['whats-new'] = 'Home/newsletter_pdf';


$route['logout'] = 'Home/logout';
