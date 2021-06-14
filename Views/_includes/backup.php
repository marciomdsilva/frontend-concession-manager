<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="<?php echo HOME_URL; ?>/Includes/css/default.css">
    <script type="text/javascript" src="<?php echo HOME_URL; ?>/Includes/js/jquery-3.6.0.min.js"></script>
</head>
<body>

<div id="header">
    header <br>
    <a href="<?php echo HOME_URL; ?>/index">Index</a>
    <a href="<?php echo HOME_URL; ?>/help">Help</a>
    <?php if (classMainSession::get('loggedIn') == true): ?>
        <a href="<?php echo HOME_URL; ?>/index/logout">Logout</a>
    <?php else: ?>
        <a href="<?php echo HOME_URL; ?>/login">Login</a>
    <?php endif; ?>
</div>

<div id="content">
