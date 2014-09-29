### About

Module for setting error pages: 403 and 404. This is the most
simple error system that exists. 

### 403. Access denied

If you set the following method somewhere in your module: 
This method reads from an ini setting which will (and should)  
give anon, user, admin, or super. If this is not met then we
returns. Like this:

    <?php

    if (!session::checkAccessControl('blog_allow')){
        return;
    }
    ?>

The above correspondes to (if the module .ini setting blog_allow = 'admin'): 

    <?php
    
    if (!session::checkAccess('admin')) {
        return;
    }
    
    ?>



### 404. Not found. 

If you want to display a not found page. Simple do something like this: 

    
    <?php
    
    if (empty($entry)) {
        moduleloader::setStatus(404);
        return;
    }
    
    // you can also set the 403 this way: 
    
    if (empty($entry)) {
        moduleloader::setStatus(404);
        return;
    }
    
    ?>


### Configuration

So far there is no configuration options, but you can override the
views functions in a template. 

### template and views. 

You can configure your error pages by creating a copy of `views.phtml`
and put this into a dir named error/ in your template. Then just add your
html.
 
