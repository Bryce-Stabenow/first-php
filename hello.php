<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <?php 
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE){
        ?> 
            <h3>You are using Internet Explorer. Why?</h3>
        <?php
            } else {
        ?>
            <h3>You are not using IE. Thank goodness...</h3>
        <?php
            }
        ?> 
    </body>
</html> 