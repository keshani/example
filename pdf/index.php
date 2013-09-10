<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$file=fopen("test.txt","r");
echo fgetc($file);
        ?>
    </body>
</html>
