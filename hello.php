<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    ?>
        <h3>You are using Internet Explorer. Why?</h3>
    <?php
    } else {
    ?>
        <h3>You are not using IE. Thank goodness...</h3>
    <?php
    }
    ?>

    <form action="action.php" method="post">
        <p>Your name: <input type="text" name="name" /></p>
        <p>Your age: <input type="text" name="age" /></p>
        <p><input type="submit" /></p>
    </form>
</body>

</html>