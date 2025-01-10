<?php
require_once "../config/config.php";
require_once __DIR__ . "/router.php";

// All files under src/
route('/', 'src/index.php');
route('/home', 'src/index.php');
route('/index', 'src/index.php');
route('/dashboard', 'src/dashboard.php');
route('/user/$id', 'src/user.php');
route('/academic_details/$id', 'src/academic_details.php');
route('/internship/$id', 'src/internship.php');
route('/forgot_password', 'src/forgot_password.php');
route('/new_grade_issue/$id', 'src/new_grade_issue.php');
route('/new_issue/id', 'src/new_issue.php');
route('/project/$id', 'src/project.php');
route('/signup', 'src/signup.php');
route('/logout', 'src/logout.php');