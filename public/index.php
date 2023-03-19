<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Setup translations
require_once '../i18n/i18n.php';

// General helper functions
require_once '../helper/helpers.php';

// Start the framework
require_once '../engine/ignition.php';

//Init Core Library
$init = new Core;
