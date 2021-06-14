<?php
//Use Autoloader
require ABSPATH . '/Classes/classDashboardMVC.php';
require ABSPATH . '/Classes/classMainController.php';
require ABSPATH . '/Classes/classMainModel.php';
require ABSPATH . '/Classes/classMainView.php';
require ABSPATH . '/Classes/classDatabase.php';

require ABSPATH . '/Classes/classMainJWTAuth.php';
require ABSPATH . '/Classes/classMainSession.php';

$app = new classDashboardMVC();
