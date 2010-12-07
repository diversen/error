<?php

/**
 * controller file for error/display/404
 *
 * @package    error
 */
header("HTTP/1.1 403 Forbidden");
$_TEMPLATE_ASSIGN = array('title' => lang::translate('Error 403: Access Denied'));

print '<p>' . lang::translate('Error 403: Access Denied') . '</p>';


