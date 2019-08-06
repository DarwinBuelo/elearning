<?php

$adminOutline = new Layout();
// suffee admin default
$css =[
    'assets/lib/sufee-admin-dashboard-master/vendors/bootstrap/dist/css/bootstrap.min.css',
    'assets/lib/sufee-admin-dashboard-master/vendors/font-awesome/css/font-awesome.min.css',
    'assets/lib/sufee-admin-dashboard-master/vendors/themify-icons/css/themify-icons.css',
    'assets/lib/sufee-admin-dashboard-master/vendors/flag-icon-css/css/flag-icon.min.css',
    'assets/lib/sufee-admin-dashboard-master/vendors/selectFX/css/cs-skin-elastic.css',
    'assets/lib/sufee-admin-dashboard-master/vendors/jqvmap/dist/jqvmap.min.css',
    'assets/lib/sufee-admin-dashboard-master/assets/css/style.css',
    'assets/css/styles.css'
];
// sufee admin default
$js = [
    'assets/lib/sufee-admin-dashboard-master/vendors/jquery/dist/jquery.min.js',
    'assets/lib/sufee-admin-dashboard-master/vendors/popper.js/dist/umd/popper.min.js',
    'assets/lib/sufee-admin-dashboard-master/vendors/bootstrap/dist/js/bootstrap.min.js',
    'assets/lib/sufee-admin-dashboard-master/assets/js/main.js',
    'assets/lib/sufee-admin-dashboard-master/vendors/chart.js/dist/Chart.bundle.min.js',
    'assets/lib/sufee-admin-dashboard-master/vendors/jqvmap/dist/jqvmap.min.css',
    'assets/lib/sufee-admin-dashboard-master/assets/js/dashboard.js',
    'assets/lib/sufee-admin-dashboard-master/assets/js/dashboard.js',
    'assets/lib/sufee-admin-dashboard-master/assets/js/dashboard.js',
];

$adminOutline->addCss($css);
$adminOutline->addJS($js);
$adminOutline->setFavIcon('assets/images/logo.png');