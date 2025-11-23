<?php 
require_once 'include/function.php';

if (!empty(getSession())) {
    header('location: website_setting');
    exit();
} else {
    header('location: login');
    exit();
}
?>