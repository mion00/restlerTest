<?php
require_once 'vendor/luracast/restler/vendor/restler.php';
use Luracast\Restler\Restler;

$r = new Restler();
$r->addAPIClass('user'); // repeat for more
$r->handle(); //serve the response
