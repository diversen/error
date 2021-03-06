<?php

namespace modules\error;

use diversen\lang;
use diversen\moduleloader;
use diversen\template;

class views {
   /**
    * controller file for error/display/404
    *
    * @package    error
    */
    public static function error403 () {
        header("HTTP/1.1 403 Forbidden");
        template::setTitle(lang::translate('Error 403: Access Denied'));
        echo '<p>' . lang::translate('Error 403: Access Denied') . '</p>';
        if (isset(moduleloader::$message)) {
            echo '<p>' . moduleloader::$message . '</p>';
        }
    }
    
    /**
     * controller file for error/display/404
     *
     * @package    error
     */    
    public static function error404 () {
        header("HTTP/1.1 404 Not Found");
        template::setTitle(lang::translate('Error 404: Page was not found'));
        echo '<p>' . lang::translate('Error 404: Page was not found') . '</p>';
    }
}
