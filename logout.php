<?php
require_once 'config/db.php';
require_once 'core/function.php';

logout();

header("Location: {$_SERVER['HTTP_REFERER']}");
