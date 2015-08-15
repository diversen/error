<?php

namespace modules\error;

use diversen\view;
use modules\error\views;

view::includeOverrideFunctions('error', 'views.php');

class module {
    public static $message = null;
    public function notfoundAction () {
        views::error404();
    }
    public function accessdeniedAction () {
        views::error403();
    }
    
}
