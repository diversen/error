<?php

/**
 * controller file for error/display/404
 *
 * @package    error
 */
header("HTTP/1.1 404 Not Found");
$_TEMPLATE_ASSIGN = array('title' => lang::translate('404 Not Found'));

print '<p>' . lang::translate('Error 404: Page was not found') . '</p>';


