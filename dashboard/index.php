<?php
require('../core/config.php');
include_once(DIR_BASE.'includes/header.php');

$page_content_ar[] = Dashboard_DashboardPageContent::get($current_user);

echo implode('', $page_content_ar);

include_once(DIR_BASE.'includes/footer.php');