### About

Module for setting error pages: 403 and 404. 

### 403

If you set the following method somewhere in your module: 

    <?php

    if (!session::checkAccessControl('blog_allow')){
        return;
    }
    ?>

or

    <?php
    
    if (!session::checkAccess('admin')) {
        return;
    }
    
    ?>

Then the default error module will load 403 page.

### 404

If you want to display a not found page. Simple do something like this: 
If you do something like this: 
    
    <?php
    
    if (empty($entry)) {
        moduleloader::setStatus(404);
        return;
    }
    
    ?>


### Configuration

So far there is no configuration options

### Override views

If you copy your error/views/* to templates/your_template/ then you override
your view files (403.inc, 404.inc)
