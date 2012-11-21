### About

Default error module. If you set the following method somewhere in your
module. Like this

    <?php

    if (!session::checkAccessControl('blog_allow')){
        moduleloader::setStatus(403);
        return;
    }

or 

    <?php

    if (!session::checkAccessControl('blog_allow')){
        moduleloader::setStatus(404);
        return;
    }

Then the default error module will load 403 or 404 pages. 

### Configuration

So far there is no configuration options

### Override views

If you copy your error/views to templates/your_template/ then you can override
your view files (403.inc, 404.inc)



 