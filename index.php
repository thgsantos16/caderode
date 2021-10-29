<?php

// Include Utils
include('./router.php');
include('./hero.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="./stylesheets/styles.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
        <!--[if IE]>
            <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <![endif]-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <title>Caderode</title>
    </head>

    <body>

        <?php include('./components/header.php'); ?>

        <div id="page" class="main-page container-fluid">
            <?php
                if($router->pageName === 'home') include('./components/hero.php');
                else include('./components/smallhero.php');
            ?>
            
            <?php $router->page(); ?>
        </div>

            <?php 
                include('./components/footer.php');
                include('./components/scripts.php'); 
            ?>

    </body>
</html>