<!-- if we want to use php in html the file extension should be .php -->
<!-- php code is executed on the server and then the results are passed to client in form of html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php // this is a php tag within which we will write out php code
        echo "First PHP code in html using php tag"; 
        echo "<div style=\"background-color: red\">Text</div>";
    ?>
</body>
</html>