<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    if (isset($_SESSION['style_prefernece']))
    {
        echo'<link rel=stylesheet href="normal_style.css"';
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/*
the below is where we cheak if the website backend is up or down
*/
try{
    require("blocks/navigation_bar.php");
    }
catch(Exception $e)
    {
        echo "the server is down";
    }
?>
    
</body>
</html>
