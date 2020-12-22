<?php
session_start();

require_once('app/core/Constants.php');
require_once('app/core/autoloader.php');
Router::dispatch();
ob_flush();
